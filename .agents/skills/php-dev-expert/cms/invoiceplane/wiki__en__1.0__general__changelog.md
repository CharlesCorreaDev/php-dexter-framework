# Laravel

> **Fonte / Source:** https://wiki.invoiceplane.com/en/1.0/general/changelog

---

Error

Error

Call to undefined method App\IP::devLink()

GET wiki.invoiceplane.com

PHP 8.3.36-dev — Laravel 11.57.0

Collapse
Expand
vendor frames

wiki/en/1\_0/general/changelog.blade.php
:22

require

vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php
:123

Illuminate\Filesystem\{closure}

vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php
:124

getRequire

vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php
:58

evaluatePath

vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php
:75

get

vendor/laravel/framework/src/Illuminate/View/View.php
:209

getContents

vendor/laravel/framework/src/Illuminate/View/View.php
:192

renderContents

vendor/laravel/framework/src/Illuminate/View/View.php
:161

render

vendor/laravel/framework/src/Illuminate/Http/Response.php
:79

setContent

vendor/laravel/framework/src/Illuminate/Http/Response.php
:35

\_\_construct

vendor/laravel/framework/src/Illuminate/Routing/Router.php
:920

toResponse

vendor/laravel/framework/src/Illuminate/Routing/Router.php
:887

prepareResponse

vendor/laravel/framework/src/Illuminate/Routing/Router.php
:807

Illuminate\Routing\{closure}

vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php
:170

Illuminate\Pipeline\{closure}

vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php
:127

then

vendor/laravel/framework/src/Illuminate/Routing/Router.php
:807

runRouteWithinStack

vendor/laravel/framework/src/Illuminate/Routing/Router.php
:786

runRoute

vendor/laravel/framework/src/Illuminate/Routing/Router.php
:750

dispatchToRoute

vendor/laravel/framework/src/Illuminate/Routing/Router.php
:739

dispatch

vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php
:201

Illuminate\Foundation\Http\{closure}

vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php
:170

Illuminate\Pipeline\{closure}

vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php
:110

handle

vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php
:209

Illuminate\Pipeline\{closure}

vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php
:127

then

vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php
:176

sendRequestThroughRouter

vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php
:145

handle

25 vendor frames collapsed

public/index.php
:52

wiki/en/1\_0/general/changelog.blade.php
:22

```
                v1.5.9 <span class="released">released 2018-04-08</span>
            </div>
            <div id="v159" class="card-body collapse show">
                <p>Improvements</p>
                <ul>
                    <li>{!! IP::devLink('IP-681') !!} - Added more schedules for recurring invoices</li>
                    <li>{!! IP::devLink('IP-688') !!} - Made the list item count setting customizable</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-679') !!} - Fixes duplicate invoice number generation</li>
                    <li>{!! IP::devLink('IP-680') !!} - Recurring invoices can be deleted again</li>
                    <li>{!! IP::devLink('IP-686') !!} - Fixed issue with Select2 locale file</li>
                    <li>{!! IP::devLink('IP-687') !!} - Users can remove clients from user accounts again</li>
                </ul>
                <p>Updated Libraries</p>
                <ul>
```

vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php
:123

```
            $__data = $data;

            return (static function () use ($__path, $__data) {
                extract($__data, EXTR_SKIP);

                return require $__path;
            })();
        }

        throw new FileNotFoundException("File does not exist at path {$path}.");
    }

    /**
     * Require the given file once.
     *
     * @param  string  $path
     * @param  array  $data
```

vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php
:124

```
            return (static function () use ($__path, $__data) {
                extract($__data, EXTR_SKIP);

                return require $__path;
            })();
        }

        throw new FileNotFoundException("File does not exist at path {$path}.");
    }

    /**
     * Require the given file once.
     *
     * @param  string  $path
     * @param  array  $data
     * @return mixed
```

vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php
:58

```
        // We'll evaluate the contents of the view inside a try/catch block so we can
        // flush out any stray output that might get out before an error occurs or
        // an exception is thrown. This prevents any partial views from leaking.
        try {
            $this->files->getRequire($path, $data);
        } catch (Throwable $e) {
            $this->handleViewException($e, $obLevel);
        }

        return ltrim(ob_get_clean());
    }

    /**
     * Handle a view exception.
     *
     * @param  \Throwable  $e
```

vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php
:75

```
        // Once we have the path to the compiled file, we will evaluate the paths with
        // typical PHP just like any other templates. We also keep a stack of views
        // which have been rendered for right exception messages to be generated.

        try {
            $results = $this->evaluatePath($this->compiler->getCompiledPath($path), $data);
        } catch (ViewException $e) {
            if (! Str::of($e->getMessage())->contains(['No such file or directory', 'File does not exist at path'])) {
                throw $e;
            }

            if (! isset($this->compiledOrNotExpired[$path])) {
                throw $e;
            }

            $this->compiler->compile($path);
```

vendor/laravel/framework/src/Illuminate/View/View.php
:209

```
     *
     * @return string
     */
    protected function getContents()
    {
        return $this->engine->get($this->path, $this->gatherData());
    }

    /**
     * Get the data bound to the view instance.
     *
     * @return array
     */
    public function gatherData()
    {
        $data = array_merge($this->factory->getShared(), $this->data);
```

vendor/laravel/framework/src/Illuminate/View/View.php
:192

```
        // clear out the sections for any separate views that may be rendered.
        $this->factory->incrementRender();

        $this->factory->callComposer($this);

        $contents = $this->getContents();

        // Once we've finished rendering the view, we'll decrement the render count
        // so that each section gets flushed out next time a view is created and
        // no old sections are staying around in the memory of an environment.
        $this->factory->decrementRender();

        return $contents;
    }

    /**
     * Get the evaluated contents of the view.
```

vendor/laravel/framework/src/Illuminate/View/View.php
:161

```
     * @throws \Throwable
     */
    public function render(?callable $callback = null)
    {
        try {
            $contents = $this->renderContents();

            $response = isset($callback) ? $callback($this, $contents) : null;

            // Once we have the contents of the view, we will flush the sections if we are
            // done rendering all views so that there is nothing left hanging over when
            // another view gets rendered in the future by the application developer.
            $this->factory->flushStateIfDoneRendering();

            return ! is_null($response) ? $response : $contents;
        } catch (Throwable $e) {
            $this->factory->flushState();
```

vendor/laravel/framework/src/Illuminate/Http/Response.php
:79

```
        // If this content implements the "Renderable" interface then we will call the
        // render method on the object so we will avoid any "__toString" exceptions
        // that might be thrown and have their errors obscured by PHP's handling.
        elseif ($content instanceof Renderable) {
            $content = $content->render();
        }

        parent::setContent($content);

        return $this;
    }

    /**
     * Determine if the given content should be turned into JSON.
     *
     * @param  mixed  $content
```

vendor/laravel/framework/src/Illuminate/Http/Response.php
:35

```
     */
    public function __construct($content = '', $status = 200, array $headers = [])
    {
        $this->headers = new ResponseHeaderBag($headers);

        $this->setContent($content);
        $this->setStatusCode($status);
        $this->setProtocolVersion('1.0');
    }

    /**
     * Get the response content.
     */
    #[\Override]
    public function getContent(): string|false
    {
        return transform(parent::getContent(), fn ($content) => $content, '');
```

vendor/laravel/framework/src/Illuminate/Routing/Router.php
:920

```
                    $response instanceof JsonSerializable ||
                    $response instanceof stdClass ||
                    is_array($response))) {
            $response = new JsonResponse($response);
        } elseif (! $response instanceof SymfonyResponse) {
            $response = new Response($response, 200, ['Content-Type' => 'text/html']);
        }

        if ($response->getStatusCode() === Response::HTTP_NOT_MODIFIED) {
            $response->setNotModified();
        }

        return $response->prepare($request);
    }

    /**
     * Substitute the route bindings onto the route.
```

vendor/laravel/framework/src/Illuminate/Routing/Router.php
:887

```
     */
    public function prepareResponse($request, $response)
    {
        $this->events->dispatch(new PreparingResponse($request, $response));

        return tap(static::toResponse($request, $response), function ($response) use ($request) {
            $this->events->dispatch(new ResponsePrepared($request, $response));
        });
    }

    /**
     * Static version of prepareResponse.
     *
     * @param  \Symfony\Component\HttpFoundation\Request  $request
     * @param  mixed  $response
     * @return \Symfony\Component\HttpFoundation\Response
     */
```

vendor/laravel/framework/src/Illuminate/Routing/Router.php
:807

```
        $middleware = $shouldSkipMiddleware ? [] : $this->gatherRouteMiddleware($route);

        return (new Pipeline($this->container))
            ->send($request)
            ->through($middleware)
            ->then(fn ($request) => $this->prepareResponse(
                $request, $route->run()
            ));
    }

    /**
     * Gather the middleware for the given route with resolved class names.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @return array
     */
    public function gatherRouteMiddleware(Route $route)
```

vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php
:170

```
     */
    protected function prepareDestination(Closure $destination)
    {
        return function ($passable) use ($destination) {
            try {
                return $destination($passable);
            } catch (Throwable $e) {
                return $this->handleException($passable, $e);
            }
        };
    }

    /**
     * Get a Closure that represents a slice of the application onion.
     *
     * @return \Closure
     */
```

vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php
:127

```
        $pipeline = array_reduce(
            array_reverse($this->pipes()), $this->carry(), $this->prepareDestination($destination)
        );

        try {
            return $pipeline($this->passable);
        } finally {
            if ($this->finally) {
                ($this->finally)($this->passable);
            }
        }
    }

    /**
     * Run the pipeline and return the result.
     *
     * @return mixed
```

vendor/laravel/framework/src/Illuminate/Routing/Router.php
:807

```
        $middleware = $shouldSkipMiddleware ? [] : $this->gatherRouteMiddleware($route);

        return (new Pipeline($this->container))
            ->send($request)
            ->through($middleware)
            ->then(fn ($request) => $this->prepareResponse(
                $request, $route->run()
            ));
    }

    /**
     * Gather the middleware for the given route with resolved class names.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @return array
     */
    public function gatherRouteMiddleware(Route $route)
```

vendor/laravel/framework/src/Illuminate/Routing/Router.php
:786

```
        $request->setRouteResolver(fn () => $route);

        $this->events->dispatch(new RouteMatched($route, $request));

        return $this->prepareResponse($request,
            $this->runRouteWithinStack($route, $request)
        );
    }

    /**
     * Run the given route within a Stack "onion" instance.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function runRouteWithinStack(Route $route, Request $request)
```

vendor/laravel/framework/src/Illuminate/Routing/Router.php
:750

```
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dispatchToRoute(Request $request)
    {
        return $this->runRoute($request, $this->findRoute($request));
    }

    /**
     * Find the route matching a given request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Routing\Route
     */
    protected function findRoute($request)
    {
        $this->events->dispatch(new Routing($request));
```

vendor/laravel/framework/src/Illuminate/Routing/Router.php
:739

```
     */
    public function dispatch(Request $request)
    {
        $this->currentRequest = $request;

        return $this->dispatchToRoute($request);
    }

    /**
     * Dispatch the request to a route and return the response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dispatchToRoute(Request $request)
    {
        return $this->runRoute($request, $this->findRoute($request));
```

vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php
:201

```
    protected function dispatchToRouter()
    {
        return function ($request) {
            $this->app->instance('request', $request);

            return $this->router->dispatch($request);
        };
    }

    /**
     * Call the terminate method on any terminable middleware.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Response  $response
     * @return void
     */
    public function terminate($request, $response)
```

vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php
:170

```
     */
    protected function prepareDestination(Closure $destination)
    {
        return function ($passable) use ($destination) {
            try {
                return $destination($passable);
            } catch (Throwable $e) {
                return $this->handleException($passable, $e);
            }
        };
    }

    /**
     * Get a Closure that represents a slice of the application onion.
     *
     * @return \Closure
     */
```

vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php
:110

```
                null,
                $this->getHeaders($data)
            );
        }

        return $next($request);
    }

    /**
     * Determine if the incoming request has a maintenance mode bypass cookie.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array  $data
     * @return bool
     */
    protected function hasValidBypassCookie($request, array $data)
    {
```

vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php
:209

```
                        // since the object we're given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this->method)
                                    ? $pipe->{$this->method}(...$parameters)
                                    : $pipe(...$parameters);

                    return $this->handleCarry($carry);
                } catch (Throwable $e) {
                    return $this->handleException($passable, $e);
                }
            };
        };
    }

    /**
```

vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php
:127

```
        $pipeline = array_reduce(
            array_reverse($this->pipes()), $this->carry(), $this->prepareDestination($destination)
        );

        try {
            return $pipeline($this->passable);
        } finally {
            if ($this->finally) {
                ($this->finally)($this->passable);
            }
        }
    }

    /**
     * Run the pipeline and return the result.
     *
     * @return mixed
```

vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php
:176

```
        $this->bootstrap();

        return (new Pipeline($this->app))
            ->send($request)
            ->through($this->app->shouldSkipMiddleware() ? [] : $this->middleware)
            ->then($this->dispatchToRouter());
    }

    /**
     * Bootstrap the application for HTTP requests.
     *
     * @return void
     */
    public function bootstrap()
    {
        if (! $this->app->hasBeenBootstrapped()) {
            $this->app->bootstrapWith($this->bootstrappers());
```

vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php
:145

```
        $this->requestStartedAt = Carbon::now();

        try {
            $request->enableHttpMethodParameterOverride();

            $response = $this->sendRequestThroughRouter($request);
        } catch (Throwable $e) {
            $this->reportException($e);

            $response = $this->renderException($request, $e);
        }

        $this->app['events']->dispatch(
            new RequestHandled($request, $response)
        );

        return $response;
```

public/index.php
:52

```
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
```

Request

GET
/en/1.0/general/changelog

Headers

host

```
wiki.invoiceplane.com
```

cf-visitor

```
{"scheme":"https"}
```

cf-ipcountry

```
BR
```

cf-connecting-ip

```
177.67.35.15
```

cdn-loop

```
cloudflare; loops=1
```

x-forwarded-proto

```
https
```

cf-ray

```
a51c1cdd39a291d5-POA
```

user-agent

```
Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36
```

accept-encoding

```
gzip, br
```

accept

```
text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
```

accept-language

```
pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7
```

x-forwarded-for

```
177.67.35.15
```

Body

```
No body data
```

Application

Routing

controller

```
App\Http\Controllers\WikiController@getPage
```

route name

```
generated::fT86PmC6Yfgx1OlJ
```

Routing Parameters

```
{
    "locale": "en",
    "version": "1.0",
    "dir": "general",
    "page": "changelog"
}
```

Database Queries

```
No query data
```
