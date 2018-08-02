<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel CRUD Sytem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ url('css/app.css')}}" />
    <script src="{{ url('main.js')}}"></script>
</head>
<body>
@include('/layout/nav')
@yield('content')


@extends('layout.footer')
