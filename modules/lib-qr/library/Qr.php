<?php
/**
 * Qr
 * @package lib-qr
 * @version 0.0.1
 */

namespace LibQr\Library;

class Qr
{

    static function render(array $opts) {
        require_once BASEPATH . '/modules/lib-qr/third-party/phpqrcode/qrlib.php';

        $text   = $opts['text'] ?? '';
        $save   = $opts['save'] ?? false;
        $size   = $opts['size'] ?? 10;
        $margin = $opts['margin'] ?? 1;

        return \QRCode::png($text, $save, \QR_ECLEVEL_L, $size, $margin);
    }
}