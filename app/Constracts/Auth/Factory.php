<?php

namespace App\Constracts\Auth;

interface Factory
{
    /**
     * Get a guard instance by name.
     *
     * @param  string|null  $name
     * @return \App\Constracts\Auth\Guard|\App\Constracts\Auth\StatefulGuard
     */
    public function guard($name = null);

    /**
     * Set the default guard the factory should serve.
     *
     * @param  string  $name
     * @return void
     */
    public function shouldUse($name);
}
