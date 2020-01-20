<?php
/**
 * @author Dmitriy Lukin <lukin.d87@gmail.com>
 */

namespace XrTools;

/**
 * Key-value Caching Interface
 */
interface CacheManager {

	public function get($key, bool $unjson = false);

	public function getMulti(array $keys, bool $unjson = false);

	public function set($key, $value = null, int $expiration = null, bool $json = false);

	public function setMulti(array $keys, int $expiration = null, bool $json = false);

	public function del($key);

	public function delMulti(array $keys);

	public function connect(array $settings);

}
