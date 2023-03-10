<?php

namespace App;

/**
 * Utils class.
 *
 * @package App
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
class Utils
{
	/**
	 * Function to capture the initial letters of words.
	 *
	 * @param string $name
	 *
	 * @return string
	 */
	public static function getInitials(string $name): string
	{
		preg_match_all('#(?<=\s|\b)\pL|[()]#u', $name, $initial);
		return isset($initial[0]) ? implode('', $initial[0]) : '';
	}

	/**
	 * Outputs or returns a parsable string representation of a variable.
	 *
	 * @see https://php.net/manual/en/function.var-export.php
	 *
	 * @param mixed $variable
	 *
	 * @return mixed the variable representation when the <i>return</i>
	 */
	public static function varExport($variable)
	{
		if (\is_array($variable)) {
			$toImplode = [];
			if (static::isAssoc($variable)) {
				foreach ($variable as $key => $value) {
					$toImplode[] = var_export($key, true) . '=>' . static::varExport($value);
				}
			} else {
				foreach ($variable as $value) {
					$toImplode[] = static::varExport($value);
				}
			}
			return '[' . implode(',', $toImplode) . ']';
		}
		return var_export($variable, true);
	}

	/**
	 * Check if array is associative.
	 *
	 * @param array $arr
	 *
	 * @return bool
	 */
	public static function isAssoc(array $arr)
	{
		if (empty($arr)) {
			return false;
		}
		return array_keys($arr) !== range(0, \count($arr) - 1);
	}

	/**
	 * Flatten a multi-dimensional array into a single level.
	 *
	 * @param array $array
	 * @param float $depth
	 *
	 * @return array
	 */
	public static function flatten(array $array, float $depth = INF): array
	{
		$result = [];
		foreach ($array as $item) {
			if (\is_array($item)) {
				$values = 1 === $depth ? array_values($item) : static::flatten($item, $depth - 1);
				foreach ($values as $value) {
					$result[] = $value;
				}
			} else {
				$result[] = $item;
			}
		}
		return $result;
	}

	/**
	 * Flatten the multidimensional array on one level, keeping the key names unique.
	 *
	 * @param array  $array
	 * @param string $type
	 * @param float  $depth
	 *
	 * @return array
	 */
	public static function flattenKeys(array $array, string $type = '_', float $depth = INF): array
	{
		$result = [];
		foreach ($array as $key => $item) {
			if (\is_array($item)) {
				if (1 === $depth) {
					$values = array_values($item);
				} else {
					$values = static::flattenKeys($item, $type, $depth - 1);
				}
				foreach ($values as $keySec => $value) {
					switch ($type) {
						case 'ucfirst':
							$keySec = \ucfirst($keySec);
							$newKey = "{$key}{$keySec}";
							break;
						default:
						$newKey = "{$key}{$type}{$keySec}";
							break;
					}
					$result[$newKey] = $value;
				}
			} else {
				$result[$key] = $item;
			}
		}
		return $result;
	}

	/**
	 * Merge two arrays.
	 *
	 * @param array $array1
	 * @param array $array2
	 *
	 * @return array
	 */
	public static function merge(array $array1, array $array2): array
	{
		foreach ($array2 as $key => $value) {
			if (isset($array1[$key])) {
				if (\is_array($array1[$key]) && \is_array($value)) {
					$array1[$key] = self::merge($array1[$key], $value);
				} else {
					$array1[$key] = $value;
				}
			} else {
				$array1[$key] = $value;
			}
		}
		return $array1;
	}

	/**
	 * Convert string from encoding to encoding.
	 *
	 * @param string $value
	 * @param string $fromCharset
	 * @param string $toCharset
	 *
	 * @return string
	 */
	public static function convertCharacterEncoding($value, $fromCharset, $toCharset)
	{
		if (\function_exists('mb_convert_encoding') && \function_exists('mb_list_encodings') && \in_array($fromCharset, mb_list_encodings()) && \in_array($toCharset, mb_list_encodings())) {
			$value = mb_convert_encoding($value, $toCharset, $fromCharset);
		} else {
			$value = iconv($fromCharset, $toCharset, $value);
		}
		return $value;
	}

	/**
	 * Function to check is a html message.
	 *
	 * @param string $content
	 *
	 * @return bool
	 */
	public static function isHtml(string $content): bool
	{
		$content = trim($content);
		if ('<' === substr($content, 0, 1) && '>' === substr($content, -1)) {
			return true;
		}
		return $content != strip_tags($content);
	}

	/**
	 * Strip tags content.
	 *
	 * @param string $content
	 *
	 * @return string
	 */
	public static function htmlToText(string $content): string
	{
		return trim(preg_replace('/[ \t\n]+/', ' ', strip_tags($content)));
	}

	/**
	 * Function to save php file with cleaning file cache.
	 *
	 * @param string       $pathDirectory
	 * @param array|string $content
	 * @param string       $comment
	 * @param int          $flag
	 * @param bool         $return
	 *
	 * @return bool $value
	 */
	public static function saveToFile(string $pathDirectory, $content, string $comment = '', int $flag = LOCK_EX, bool $return = false): bool
	{
		if (\is_array($content)) {
			$content = self::varExport($content);
		}
		if ($return) {
			$content = "return $content;";
		}
		if ($comment) {
			$content = "<?php \n/**  {$comment}  */\n{$content}\n";
		} else {
			$content = "<?php $content" . PHP_EOL;
		}
		if (false !== $value = file_put_contents($pathDirectory, $content, $flag)) {
			Cache::resetFileCache($pathDirectory);
		}
		return (bool) $value;
	}

	/**
	 * Replacement for the ucfirst function for proper Multibyte String operation.
	 * Delete function will exist as mb_ucfirst.
	 *
	 * @param string $string
	 *
	 * @return string
	 */
	public static function mbUcfirst($string)
	{
		return mb_strtoupper(mb_substr($string, 0, 1)) . mb_substr($string, 1);
	}

	/**
	 * Sanitize special chars from given string.
	 *
	 * @param string $string
	 * @param string $delimiter
	 *
	 * @return string
	 */
	public static function sanitizeSpecialChars(string $string, string $delimiter = '_'): string
	{
		$string = mb_convert_encoding((string) $string, 'UTF-8', mb_list_encodings());
		$replace = [
			'??' => '-', '??' => '-', '??' => '-', '??' => '-',
			'??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'Ae',
			'??' => 'B', '??' => 'C', '??' => 'C', '??' => 'C', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E',
			'??' => 'G', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'L', '??' => 'N', '??' => 'N',
			'??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'Oe', '??' => 'S', '??' => 'S', '??' => 'S',
			'??' => 'S', '??' => 'T', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'Ue', '??' => 'Y', '??' => 'Z', '??' => 'Z',
			'??' => 'Z', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a',
			'??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'ae',
			'??' => 'ae', '??' => 'ae', '??' => 'ae',	'??' => 'b', '??' => 'b', '??' => 'b', '??' => 'b',	'??' => 'c', '??' => 'c',
			'??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c',
			'??' => 'ch', '??' => 'ch', '??' => 'd', '??' => 'd', '??' => 'd', '??' => 'd', '??' => 'd', '??' => 'd', '??' => 'D',
			'??' => 'd', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e',
			'??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e',
			'??' => 'e', '??' => 'e', '??' => 'e', '??' => 'f', '??' => 'f', '??' => 'f', '??' => 'g', '??' => 'g', '??' => 'g',
			'??' => 'g', '??' => 'g', '??' => 'g', '??' => 'g', '??' => 'g', '??' => 'g', '??' => 'g', '??' => 'g', '??' => 'g',
			'??' => 'h', '??' => 'h', '??' => 'h', '??' => 'h', '??' => 'h', '??' => 'h', '??' => 'h', '??' => 'h', '??' => 'i',
			'??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i',
			'??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i',
			'??' => 'i', '??' => 'i', '??' => 'i', '??' => 'ij', '??' => 'ij', '??' => 'j', '??' => 'j', '??' => 'j', '??' => 'j',
			'??' => 'ja', '??' => 'ja', '??' => 'je', '??' => 'je', '??' => 'jo', '??' => 'jo', '??' => 'ju', '??' => 'ju',
			'??' => 'k', '??' => 'k', '??' => 'k', '??' => 'k', '??' => 'k', '??' => 'k', '??' => 'k', '??' => 'l', '??' => 'l',
			'??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l',
			'??' => 'l', '??' => 'm', '??' => 'm', '??' => 'm', '??' => 'm', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n',
			'??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n',
			'??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o',
			'??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o',
			'??' => 'o', '??' => 'oe', '??' => 'oe', '??' => 'oe', '??' => 'p', '??' => 'p', '??' => 'p', '??' => 'p', '??' => 'q',
			'??' => 'r', '??' => 'r', '??' => 'r', '??' => 'r', '??' => 'r', '??' => 'r', '??' => 'r', '??' => 'r', '??' => 'r',
			'??' => 's', '??' => 's', '??' => 's', '??' => 's', '??' => 's', '??' => 's', '??' => 's', '??' => 's', '??' => 's',
			'??' => 'sch', '??' => 'sch', '??' => 'sh', '??' => 'sh', '??' => 'ss', '??' => 't', '??' => 't', '??' => 't',
			'??' => 't', '??' => 't', '??' => 't', '??' => 't', '??' => 't', '??' => 't', '??' => 't', '??' => 't', '???' => 'tm',
			'??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u',
			'??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u',
			'??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u',
			'??' => 'u', '??' => 'u', '??' => 'ue', '??' => 'v', '??' => 'v', '??' => 'v', '??' => 'w', '??' => 'w', '??' => 'w',
			'??' => 'y', '??' => 'y', '??' => 'y', '??' => 'y', '??' => 'y', '??' => 'y', '??' => 'y', '??' => 'z', '??' => 'z',
			'??' => 'z', '??' => 'z', '??' => 'z', '??' => 'z', '??' => 'z', '??' => 'zh', '??' => 'zh', '??' => 'D', '??' => '8',
			'??' => '(c)', '??' => 'A', '??' => 'B', '??' => 'G', '??' => 'D', '??' => 'E', '??' => 'Z', '??' => 'H', '??' => 'I',
			'??' => 'K', '??' => 'L', '??' => 'M', '??' => 'N', '??' => '3', '??' => 'O', '??' => 'P',	'??' => 'R', '??' => 'S',
			'??' => 'T', '??' => 'Y', '??' => 'F', '??' => 'X', '??' => 'PS', '??' => 'W', '??' => 'A', '??' => 'E', '??' => 'I',
			'??' => 'O', '??' => 'Y', '??' => 'H', '??' => 'W', '??' => 'I', '??' => 'Y', '??' => 'a', '??' => 'b', '??' => 'g',
			'??' => 'd', '??' => 'e', '??' => 'z', '??' => 'h', '??' => '8', '??' => 'i', '??' => 'k', '??' => 'l', '??' => 'm',
			'??' => 'n', '??' => '3', '??' => 'o', '??' => 'p', '??' => 'r', '??' => 's', '??' => 't', '??' => 'y', '??' => 'f',
			'??' => 'x', '??' => 'ps', '??' => 'w', '??' => 'a', '??' => 'e', '??' => 'i', '??' => 'o', '??' => 'y', '??' => 'h',
			'??' => 'w', '??' => 's', '??' => 'i', '??' => 'y', '??' => 'y', '??' => 'i',
		];
		$string = strtr($string, $replace);
		$string = preg_replace('/[^\p{L}\p{Nd}\.]+/u', $delimiter, $string);
		return trim($string, $delimiter);
	}

	/**
	 * Change the order of associative array.
	 *
	 * @param array $array
	 * @param array $order
	 *
	 * @return array
	 */
	public static function changeSequence(array $array, array $order): array
	{
		if (!$order) {
			return $array;
		}
		$returnLinks = [];
		foreach ($order as $value) {
			if ($array[$value]) {
				$returnLinks[$value] = $array[$value];
			}
			unset($array[$value]);
		}
		return array_merge($returnLinks, $array);
	}

	/**
	 * Get locks content by events.
	 *
	 * @param array $locks
	 *
	 * @return string
	 */
	public static function getLocksContent(array $locks): string
	{
		$return = '';
		foreach ($locks as $lock) {
			switch ($lock) {
				case 'copy':
					$return .= ' oncopy = "return false"';
					break;
				case 'cut':
					$return .= ' oncut = "return false"';
					break;
				case 'paste':
					$return .= ' onpaste = "return false"';
					break;
				case 'contextmenu':
					$return .= ' oncontextmenu = "return false"';
					break;
				case 'selectstart':
					$return .= ' onselectstart = "return false" onselect = "return false"';
					break;
				case 'drag':
					$return .= ' ondragstart = "return false" ondrag = "return false"';
					break;
			}
		}
		return $return;
	}
}
