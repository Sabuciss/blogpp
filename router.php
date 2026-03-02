<?php
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$httpMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';

$routes = require("routes.php");

foreach ($routes as $methodRoutes) {
  foreach ($methodRoutes as $controller) {
    require_once "controllers/" . explode("@", $controller)[0] . ".php";
  }
}

$methodRoutes = $routes[$httpMethod] ?? [];

foreach ($methodRoutes as $routePattern => $controllerAction) {
  $regex = preg_replace('/\{([a-zA-Z_][a-zA-Z0-9_]*)\}/', '(?P<$1>[^/]+)', $routePattern);
  $regex = '#^' . $regex . '$#';

  if (!preg_match($regex, $uri, $matches)) {
    continue;
  }

  [$controller, $method] = explode('@', $controllerAction);
  $instance = new $controller();

  $params = [];
  foreach ($matches as $key => $value) {
    if (is_string($key)) {
      $params[] = $value;
    }
  }

  $instance->$method(...$params);
  exit();
}

http_response_code(404);
echo "Lapa nav atrasta!";
exit();