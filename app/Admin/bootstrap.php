<?php

Use Encore\Admin\Admin;

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

Encore\Admin\Form::forget(['map', 'editor']);

Admin::favicon(env('APP_URL').'/images/smart-home.png');
Admin::css('css/style.css');
Admin::js('js/script.js');
Admin::js("https://maps.googleapis.com/maps/api/js?key=".env('GOOGLE_MAP_API_KEY')."&callback=initMap");




