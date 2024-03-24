<?php

namespace Rleal\Playground\Hooks;

function useAuth() {
    function login () {
        return 'login';
    }

    function logout() {
        return 'logout';
    }

    return [
        fn () => login(),
        fn () => logout(),
    ];
};