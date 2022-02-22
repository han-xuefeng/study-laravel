<?php

namespace Symfony\Component\HttpFoundation\Traits;

use Symfony\Component\HttpFoundation\IpUtils;

trait TrustProxyTrait
{

    public static $trustedProxies;
    public static $trustedHeaderSet;

    private const TRUSTED_HEADERS = [
        self::HEADER_FORWARDED => 'FORWARDED',
        self::HEADER_X_FORWARDED_FOR => 'X_FORWARDED_FOR',
        self::HEADER_X_FORWARDED_HOST => 'X_FORWARDED_HOST',
        self::HEADER_X_FORWARDED_PROTO => 'X_FORWARDED_PROTO',
        self::HEADER_X_FORWARDED_PORT => 'X_FORWARDED_PORT',
    ];

    private const FORWARDED_PARAMS = [
        self::HEADER_X_FORWARDED_FOR => 'for',
        self::HEADER_X_FORWARDED_HOST => 'host',
        self::HEADER_X_FORWARDED_PROTO => 'proto',
        self::HEADER_X_FORWARDED_PORT => 'host',
    ];

    public static function setTrustedProxies(array $proxies, int $trustedHeaderSet)
    {
        self::$trustedProxies = array_reduce($proxies, function ($proxies, $proxy) {
            if ('REMOTE_ADDR' !== $proxy) {
                $proxies[] = $proxy;
            } elseif (isset($_SERVER['REMOTE_ADDR'])) {
                $proxies[] = $_SERVER['REMOTE_ADDR'];
            }

            return $proxies;
        }, []);
        self::$trustedHeaderSet = $trustedHeaderSet;
    }

    public static function getTrustedProxies()
    {
        return self::$trustedProxies;
    }

    public function getClientIps()
    {
        $ip = $this->server->get('REMOTE_ADDR');

        if (!$this->isFromTrustedProxy()) {
            return [$ip];
        }

        return $this->getTrustedValues(self::HEADER_X_FORWARDED_FOR, $ip) ?: [$ip];
    }

    public function isFromTrustedProxy()
    {
        return self::$trustedProxies && IpUtils::checkIp($this->server->get('REMOTE_ADDR', ''), self::$trustedProxies);
    }


}