@extends('errors::minimal')
<!--
minimal.blade.php を表示する。 
独自レイアウトを使う場合は、新たにファイルを作成してパスを指定する。
-->

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
