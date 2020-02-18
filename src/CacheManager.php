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

	public function setConnectionParams(array $settings);

	public function getStamp(string $key, int $exp = 3600);

	public function increment(string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0);

	public function decrement(string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0);

	public function flush();
}
