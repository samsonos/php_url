<?php
/**
 * Created by PhpStorm.
 * User: VITALYIEGOROV
 * Date: 24.12.15
 * Time: 18:53
 */

/**
 * URL(УРЛ) - Получить объект для работы с URL
 * @return samson\core\URL Объект для работы с URL
 */
function & url(){
    /*static $_v;
    $_v = isset($_v) ? $_v : new \samson\url\URL();*/
    return m('url');
}