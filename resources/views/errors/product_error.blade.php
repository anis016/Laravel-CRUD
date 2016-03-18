<?php
/**
 * Created by PhpStorm.
 * User: anis
 * Date: 3/6/16
 * Time: 6:16 PM
 */ ?>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
