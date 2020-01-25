<?php


return [
    // larave passport prefix
    // ex : api/{lp}/login
    "route_prefix" => "lp",
    // front url for ur app
    "reset_url" => "http://front-end.com",
    // enable / disable registration
    "enable_registration" => (bool)env("register", true),
];
