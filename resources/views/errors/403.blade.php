@extends('errors.minimal')

@section('title', __('Forbidden: Weyler'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
