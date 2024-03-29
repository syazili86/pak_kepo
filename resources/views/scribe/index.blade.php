<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>PakKepo Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://pak_kepo.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.12.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.12.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-diktuk" class="tocify-header">
                <li class="tocify-item level-1" data-unique="diktuk">
                    <a href="#diktuk">Diktuk</a>
                </li>
                                    <ul id="tocify-subheader-diktuk" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="diktuk-GETapi-post-category-diktuk">
                                <a href="#diktuk-GETapi-post-category-diktuk">Show all POST on diktuk</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diktuk-GETapi-post-diktuk-akpol-pengumuman">
                                <a href="#diktuk-GETapi-post-diktuk-akpol-pengumuman">Pengumuman Akpol</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diktuk-GETapi-post-diktuk-akpol-persyaratan">
                                <a href="#diktuk-GETapi-post-diktuk-akpol-persyaratan">Persyaratan Akpol</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diktuk-GETapi-post-diktuk-akpol-timeline">
                                <a href="#diktuk-GETapi-post-diktuk-akpol-timeline">Timeline Akpol</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diktuk-GETapi-post-diktuk-bintara-pengumuman">
                                <a href="#diktuk-GETapi-post-diktuk-bintara-pengumuman">Pengumuman Bintara</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diktuk-GETapi-post-diktuk-bintara-persyaratan">
                                <a href="#diktuk-GETapi-post-diktuk-bintara-persyaratan">Persyaratan Bintara</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diktuk-GETapi-post-diktuk-bintara-timeline">
                                <a href="#diktuk-GETapi-post-diktuk-bintara-timeline">Timeline Bintara</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diktuk-GETapi-post-diktuk-sipss-pengumuman">
                                <a href="#diktuk-GETapi-post-diktuk-sipss-pengumuman">Pengumuman SIPSS</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diktuk-GETapi-post-diktuk-sipss-persyaratan">
                                <a href="#diktuk-GETapi-post-diktuk-sipss-persyaratan">Persyaratan SIPSS</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diktuk-GETapi-post-diktuk-sipss-timeline">
                                <a href="#diktuk-GETapi-post-diktuk-sipss-timeline">Timeline SIPSS</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diktuk-GETapi-post-diktuk-tamtama-pengumuman">
                                <a href="#diktuk-GETapi-post-diktuk-tamtama-pengumuman">Pengumuman Ttamtama</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diktuk-GETapi-post-diktuk-tamtama-persyaratan">
                                <a href="#diktuk-GETapi-post-diktuk-tamtama-persyaratan">Persyaratan Tamtama</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diktuk-GETapi-post-diktuk-tamtama-timeline">
                                <a href="#diktuk-GETapi-post-diktuk-tamtama-timeline">Timeline Tamtama</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diktuk-GETapi-post-diktuk-cpnspolri-pengumuman">
                                <a href="#diktuk-GETapi-post-diktuk-cpnspolri-pengumuman">Pengumuman cpnspolri</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diktuk-GETapi-post-diktuk-cpnspolri-persyaratan">
                                <a href="#diktuk-GETapi-post-diktuk-cpnspolri-persyaratan">Persyaratan cpnspolri</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diktuk-GETapi-post-diktuk-cpnspolri-timeline">
                                <a href="#diktuk-GETapi-post-diktuk-cpnspolri-timeline">Timeline cpnspolri</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                                <a href="#endpoints-POSTapi-register">Register new user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                                <a href="#endpoints-POSTapi-login">Authentication</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-reset-password">
                                <a href="#endpoints-POSTapi-reset-password">Reset Password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-fcm_token--fcmToken-">
                                <a href="#endpoints-POSTapi-fcm_token--fcmToken-">POST api/fcm_token/{fcmToken}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-post">
                                <a href="#endpoints-GETapi-post">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-post-category--slug-">
                                <a href="#endpoints-GETapi-post-category--slug-">Show all POST by kategori</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-post--slug-">
                                <a href="#endpoints-GETapi-post--slug-">Show a POST by slug</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-page">
                                <a href="#endpoints-GETapi-page">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-page--slug-">
                                <a href="#endpoints-GETapi-page--slug-">Show a POST by slug</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-media">
                                <a href="#endpoints-GETapi-media">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-media-category--slug-">
                                <a href="#endpoints-GETapi-media-category--slug-">Show all POST by kategori</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-media--slug-">
                                <a href="#endpoints-GETapi-media--slug-">Show a POST by slug</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-post_category">
                                <a href="#endpoints-GETapi-post_category">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-forum">
                                <a href="#endpoints-GETapi-forum">GET api/forum</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-forum--forum_id-">
                                <a href="#endpoints-GETapi-forum--forum_id-">GET api/forum/{forum_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-forum">
                                <a href="#endpoints-POSTapi-forum">POST api/forum</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-forum--forum_id-">
                                <a href="#endpoints-PATCHapi-forum--forum_id-">PATCH api/forum/{forum_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-forum--forum_id-">
                                <a href="#endpoints-DELETEapi-forum--forum_id-">DELETE api/forum/{forum_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-forum_komen--forum_id-">
                                <a href="#endpoints-GETapi-forum_komen--forum_id-">GET api/forum_komen/{forum_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-forum_komen--forum_id---forumKomen_id-">
                                <a href="#endpoints-GETapi-forum_komen--forum_id---forumKomen_id-">GET api/forum_komen/{forum_id}/{forumKomen_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-forum_komen--forum_id-">
                                <a href="#endpoints-POSTapi-forum_komen--forum_id-">POST api/forum_komen/{forum_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-forum_komen--forum_id---forumKomen_id-">
                                <a href="#endpoints-PATCHapi-forum_komen--forum_id---forumKomen_id-">PATCH api/forum_komen/{forum_id}/{forumKomen_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-forum_komen--forumKomen_id-">
                                <a href="#endpoints-DELETEapi-forum_komen--forumKomen_id-">DELETE api/forum_komen/{forumKomen_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-post-category-headline">
                                <a href="#endpoints-GETapi-post-category-headline">Show all POST on headline</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: January 20, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://pak_kepo.test</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="diktuk">Diktuk</h1>

    

                                <h2 id="diktuk-GETapi-post-category-diktuk">Show all POST on diktuk</h2>

<p>
</p>

<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.
authenticated: false</p>

<span id="example-requests-GETapi-post-category-diktuk">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/category/diktuk" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/category/diktuk"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-category-diktuk">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-category-diktuk" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-category-diktuk"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-category-diktuk" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-category-diktuk" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-category-diktuk"></code></pre>
</span>
<form id="form-GETapi-post-category-diktuk" data-method="GET"
      data-path="api/post/category/diktuk"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-category-diktuk', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-category-diktuk"
                    onclick="tryItOut('GETapi-post-category-diktuk');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-category-diktuk"
                    onclick="cancelTryOut('GETapi-post-category-diktuk');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-category-diktuk" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/category/diktuk</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-category-diktuk"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-category-diktuk"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="diktuk-GETapi-post-diktuk-akpol-pengumuman">Pengumuman Akpol</h2>

<p>
</p>



<span id="example-requests-GETapi-post-diktuk-akpol-pengumuman">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/diktuk-akpol-pengumuman" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/diktuk-akpol-pengumuman"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-diktuk-akpol-pengumuman">
            <blockquote>
            <p>Example response (200, When the thing was done smoothly.):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-diktuk-akpol-pengumuman" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-diktuk-akpol-pengumuman"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-diktuk-akpol-pengumuman" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-diktuk-akpol-pengumuman" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-diktuk-akpol-pengumuman"></code></pre>
</span>
<form id="form-GETapi-post-diktuk-akpol-pengumuman" data-method="GET"
      data-path="api/post/diktuk-akpol-pengumuman"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-diktuk-akpol-pengumuman', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-diktuk-akpol-pengumuman"
                    onclick="tryItOut('GETapi-post-diktuk-akpol-pengumuman');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-diktuk-akpol-pengumuman"
                    onclick="cancelTryOut('GETapi-post-diktuk-akpol-pengumuman');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-diktuk-akpol-pengumuman" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/diktuk-akpol-pengumuman</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-diktuk-akpol-pengumuman"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-diktuk-akpol-pengumuman"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="diktuk-GETapi-post-diktuk-akpol-persyaratan">Persyaratan Akpol</h2>

<p>
</p>



<span id="example-requests-GETapi-post-diktuk-akpol-persyaratan">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/diktuk-akpol-persyaratan" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/diktuk-akpol-persyaratan"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-diktuk-akpol-persyaratan">
            <blockquote>
            <p>Example response (200, When the thing was done smoothly.):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-diktuk-akpol-persyaratan" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-diktuk-akpol-persyaratan"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-diktuk-akpol-persyaratan" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-diktuk-akpol-persyaratan" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-diktuk-akpol-persyaratan"></code></pre>
</span>
<form id="form-GETapi-post-diktuk-akpol-persyaratan" data-method="GET"
      data-path="api/post/diktuk-akpol-persyaratan"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-diktuk-akpol-persyaratan', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-diktuk-akpol-persyaratan"
                    onclick="tryItOut('GETapi-post-diktuk-akpol-persyaratan');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-diktuk-akpol-persyaratan"
                    onclick="cancelTryOut('GETapi-post-diktuk-akpol-persyaratan');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-diktuk-akpol-persyaratan" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/diktuk-akpol-persyaratan</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-diktuk-akpol-persyaratan"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-diktuk-akpol-persyaratan"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="diktuk-GETapi-post-diktuk-akpol-timeline">Timeline Akpol</h2>

<p>
</p>



<span id="example-requests-GETapi-post-diktuk-akpol-timeline">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/diktuk-akpol-timeline" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/diktuk-akpol-timeline"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-diktuk-akpol-timeline">
            <blockquote>
            <p>Example response (200, When the thing was done smoothly.):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-diktuk-akpol-timeline" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-diktuk-akpol-timeline"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-diktuk-akpol-timeline" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-diktuk-akpol-timeline" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-diktuk-akpol-timeline"></code></pre>
</span>
<form id="form-GETapi-post-diktuk-akpol-timeline" data-method="GET"
      data-path="api/post/diktuk-akpol-timeline"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-diktuk-akpol-timeline', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-diktuk-akpol-timeline"
                    onclick="tryItOut('GETapi-post-diktuk-akpol-timeline');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-diktuk-akpol-timeline"
                    onclick="cancelTryOut('GETapi-post-diktuk-akpol-timeline');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-diktuk-akpol-timeline" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/diktuk-akpol-timeline</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-diktuk-akpol-timeline"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-diktuk-akpol-timeline"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="diktuk-GETapi-post-diktuk-bintara-pengumuman">Pengumuman Bintara</h2>

<p>
</p>



<span id="example-requests-GETapi-post-diktuk-bintara-pengumuman">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/diktuk-bintara-pengumuman" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/diktuk-bintara-pengumuman"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-diktuk-bintara-pengumuman">
            <blockquote>
            <p>Example response (200, When the thing was done smoothly.):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-diktuk-bintara-pengumuman" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-diktuk-bintara-pengumuman"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-diktuk-bintara-pengumuman" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-diktuk-bintara-pengumuman" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-diktuk-bintara-pengumuman"></code></pre>
</span>
<form id="form-GETapi-post-diktuk-bintara-pengumuman" data-method="GET"
      data-path="api/post/diktuk-bintara-pengumuman"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-diktuk-bintara-pengumuman', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-diktuk-bintara-pengumuman"
                    onclick="tryItOut('GETapi-post-diktuk-bintara-pengumuman');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-diktuk-bintara-pengumuman"
                    onclick="cancelTryOut('GETapi-post-diktuk-bintara-pengumuman');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-diktuk-bintara-pengumuman" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/diktuk-bintara-pengumuman</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-diktuk-bintara-pengumuman"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-diktuk-bintara-pengumuman"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="diktuk-GETapi-post-diktuk-bintara-persyaratan">Persyaratan Bintara</h2>

<p>
</p>



<span id="example-requests-GETapi-post-diktuk-bintara-persyaratan">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/diktuk-bintara-persyaratan" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/diktuk-bintara-persyaratan"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-diktuk-bintara-persyaratan">
            <blockquote>
            <p>Example response (200, When the thing was done smoothly.):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-diktuk-bintara-persyaratan" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-diktuk-bintara-persyaratan"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-diktuk-bintara-persyaratan" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-diktuk-bintara-persyaratan" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-diktuk-bintara-persyaratan"></code></pre>
</span>
<form id="form-GETapi-post-diktuk-bintara-persyaratan" data-method="GET"
      data-path="api/post/diktuk-bintara-persyaratan"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-diktuk-bintara-persyaratan', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-diktuk-bintara-persyaratan"
                    onclick="tryItOut('GETapi-post-diktuk-bintara-persyaratan');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-diktuk-bintara-persyaratan"
                    onclick="cancelTryOut('GETapi-post-diktuk-bintara-persyaratan');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-diktuk-bintara-persyaratan" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/diktuk-bintara-persyaratan</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-diktuk-bintara-persyaratan"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-diktuk-bintara-persyaratan"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="diktuk-GETapi-post-diktuk-bintara-timeline">Timeline Bintara</h2>

<p>
</p>



<span id="example-requests-GETapi-post-diktuk-bintara-timeline">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/diktuk-bintara-timeline" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/diktuk-bintara-timeline"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-diktuk-bintara-timeline">
            <blockquote>
            <p>Example response (200, When the thing was done smoothly.):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-diktuk-bintara-timeline" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-diktuk-bintara-timeline"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-diktuk-bintara-timeline" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-diktuk-bintara-timeline" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-diktuk-bintara-timeline"></code></pre>
</span>
<form id="form-GETapi-post-diktuk-bintara-timeline" data-method="GET"
      data-path="api/post/diktuk-bintara-timeline"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-diktuk-bintara-timeline', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-diktuk-bintara-timeline"
                    onclick="tryItOut('GETapi-post-diktuk-bintara-timeline');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-diktuk-bintara-timeline"
                    onclick="cancelTryOut('GETapi-post-diktuk-bintara-timeline');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-diktuk-bintara-timeline" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/diktuk-bintara-timeline</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-diktuk-bintara-timeline"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-diktuk-bintara-timeline"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="diktuk-GETapi-post-diktuk-sipss-pengumuman">Pengumuman SIPSS</h2>

<p>
</p>



<span id="example-requests-GETapi-post-diktuk-sipss-pengumuman">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/diktuk-sipss-pengumuman" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/diktuk-sipss-pengumuman"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-diktuk-sipss-pengumuman">
            <blockquote>
            <p>Example response (200, When the thing was done smoothly.):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-diktuk-sipss-pengumuman" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-diktuk-sipss-pengumuman"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-diktuk-sipss-pengumuman" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-diktuk-sipss-pengumuman" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-diktuk-sipss-pengumuman"></code></pre>
</span>
<form id="form-GETapi-post-diktuk-sipss-pengumuman" data-method="GET"
      data-path="api/post/diktuk-sipss-pengumuman"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-diktuk-sipss-pengumuman', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-diktuk-sipss-pengumuman"
                    onclick="tryItOut('GETapi-post-diktuk-sipss-pengumuman');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-diktuk-sipss-pengumuman"
                    onclick="cancelTryOut('GETapi-post-diktuk-sipss-pengumuman');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-diktuk-sipss-pengumuman" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/diktuk-sipss-pengumuman</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-diktuk-sipss-pengumuman"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-diktuk-sipss-pengumuman"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="diktuk-GETapi-post-diktuk-sipss-persyaratan">Persyaratan SIPSS</h2>

<p>
</p>



<span id="example-requests-GETapi-post-diktuk-sipss-persyaratan">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/diktuk-sipss-persyaratan" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/diktuk-sipss-persyaratan"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-diktuk-sipss-persyaratan">
            <blockquote>
            <p>Example response (200, When the thing was done smoothly.):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-diktuk-sipss-persyaratan" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-diktuk-sipss-persyaratan"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-diktuk-sipss-persyaratan" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-diktuk-sipss-persyaratan" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-diktuk-sipss-persyaratan"></code></pre>
</span>
<form id="form-GETapi-post-diktuk-sipss-persyaratan" data-method="GET"
      data-path="api/post/diktuk-sipss-persyaratan"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-diktuk-sipss-persyaratan', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-diktuk-sipss-persyaratan"
                    onclick="tryItOut('GETapi-post-diktuk-sipss-persyaratan');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-diktuk-sipss-persyaratan"
                    onclick="cancelTryOut('GETapi-post-diktuk-sipss-persyaratan');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-diktuk-sipss-persyaratan" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/diktuk-sipss-persyaratan</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-diktuk-sipss-persyaratan"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-diktuk-sipss-persyaratan"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="diktuk-GETapi-post-diktuk-sipss-timeline">Timeline SIPSS</h2>

<p>
</p>



<span id="example-requests-GETapi-post-diktuk-sipss-timeline">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/diktuk-sipss-timeline" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/diktuk-sipss-timeline"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-diktuk-sipss-timeline">
            <blockquote>
            <p>Example response (200, When the thing was done smoothly.):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-diktuk-sipss-timeline" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-diktuk-sipss-timeline"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-diktuk-sipss-timeline" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-diktuk-sipss-timeline" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-diktuk-sipss-timeline"></code></pre>
</span>
<form id="form-GETapi-post-diktuk-sipss-timeline" data-method="GET"
      data-path="api/post/diktuk-sipss-timeline"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-diktuk-sipss-timeline', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-diktuk-sipss-timeline"
                    onclick="tryItOut('GETapi-post-diktuk-sipss-timeline');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-diktuk-sipss-timeline"
                    onclick="cancelTryOut('GETapi-post-diktuk-sipss-timeline');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-diktuk-sipss-timeline" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/diktuk-sipss-timeline</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-diktuk-sipss-timeline"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-diktuk-sipss-timeline"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="diktuk-GETapi-post-diktuk-tamtama-pengumuman">Pengumuman Ttamtama</h2>

<p>
</p>



<span id="example-requests-GETapi-post-diktuk-tamtama-pengumuman">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/diktuk-tamtama-pengumuman" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/diktuk-tamtama-pengumuman"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-diktuk-tamtama-pengumuman">
            <blockquote>
            <p>Example response (200, When the thing was done smoothly.):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-diktuk-tamtama-pengumuman" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-diktuk-tamtama-pengumuman"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-diktuk-tamtama-pengumuman" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-diktuk-tamtama-pengumuman" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-diktuk-tamtama-pengumuman"></code></pre>
</span>
<form id="form-GETapi-post-diktuk-tamtama-pengumuman" data-method="GET"
      data-path="api/post/diktuk-tamtama-pengumuman"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-diktuk-tamtama-pengumuman', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-diktuk-tamtama-pengumuman"
                    onclick="tryItOut('GETapi-post-diktuk-tamtama-pengumuman');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-diktuk-tamtama-pengumuman"
                    onclick="cancelTryOut('GETapi-post-diktuk-tamtama-pengumuman');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-diktuk-tamtama-pengumuman" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/diktuk-tamtama-pengumuman</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-diktuk-tamtama-pengumuman"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-diktuk-tamtama-pengumuman"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="diktuk-GETapi-post-diktuk-tamtama-persyaratan">Persyaratan Tamtama</h2>

<p>
</p>



<span id="example-requests-GETapi-post-diktuk-tamtama-persyaratan">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/diktuk-tamtama-persyaratan" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/diktuk-tamtama-persyaratan"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-diktuk-tamtama-persyaratan">
            <blockquote>
            <p>Example response (200, When the thing was done smoothly.):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-diktuk-tamtama-persyaratan" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-diktuk-tamtama-persyaratan"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-diktuk-tamtama-persyaratan" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-diktuk-tamtama-persyaratan" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-diktuk-tamtama-persyaratan"></code></pre>
</span>
<form id="form-GETapi-post-diktuk-tamtama-persyaratan" data-method="GET"
      data-path="api/post/diktuk-tamtama-persyaratan"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-diktuk-tamtama-persyaratan', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-diktuk-tamtama-persyaratan"
                    onclick="tryItOut('GETapi-post-diktuk-tamtama-persyaratan');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-diktuk-tamtama-persyaratan"
                    onclick="cancelTryOut('GETapi-post-diktuk-tamtama-persyaratan');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-diktuk-tamtama-persyaratan" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/diktuk-tamtama-persyaratan</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-diktuk-tamtama-persyaratan"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-diktuk-tamtama-persyaratan"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="diktuk-GETapi-post-diktuk-tamtama-timeline">Timeline Tamtama</h2>

<p>
</p>



<span id="example-requests-GETapi-post-diktuk-tamtama-timeline">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/diktuk-tamtama-timeline" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/diktuk-tamtama-timeline"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-diktuk-tamtama-timeline">
            <blockquote>
            <p>Example response (200, When the thing was done smoothly.):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-diktuk-tamtama-timeline" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-diktuk-tamtama-timeline"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-diktuk-tamtama-timeline" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-diktuk-tamtama-timeline" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-diktuk-tamtama-timeline"></code></pre>
</span>
<form id="form-GETapi-post-diktuk-tamtama-timeline" data-method="GET"
      data-path="api/post/diktuk-tamtama-timeline"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-diktuk-tamtama-timeline', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-diktuk-tamtama-timeline"
                    onclick="tryItOut('GETapi-post-diktuk-tamtama-timeline');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-diktuk-tamtama-timeline"
                    onclick="cancelTryOut('GETapi-post-diktuk-tamtama-timeline');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-diktuk-tamtama-timeline" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/diktuk-tamtama-timeline</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-diktuk-tamtama-timeline"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-diktuk-tamtama-timeline"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="diktuk-GETapi-post-diktuk-cpnspolri-pengumuman">Pengumuman cpnspolri</h2>

<p>
</p>



<span id="example-requests-GETapi-post-diktuk-cpnspolri-pengumuman">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/diktuk-cpnspolri-pengumuman" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/diktuk-cpnspolri-pengumuman"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-diktuk-cpnspolri-pengumuman">
            <blockquote>
            <p>Example response (200, When the thing was done smoothly.):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-diktuk-cpnspolri-pengumuman" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-diktuk-cpnspolri-pengumuman"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-diktuk-cpnspolri-pengumuman" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-diktuk-cpnspolri-pengumuman" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-diktuk-cpnspolri-pengumuman"></code></pre>
</span>
<form id="form-GETapi-post-diktuk-cpnspolri-pengumuman" data-method="GET"
      data-path="api/post/diktuk-cpnspolri-pengumuman"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-diktuk-cpnspolri-pengumuman', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-diktuk-cpnspolri-pengumuman"
                    onclick="tryItOut('GETapi-post-diktuk-cpnspolri-pengumuman');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-diktuk-cpnspolri-pengumuman"
                    onclick="cancelTryOut('GETapi-post-diktuk-cpnspolri-pengumuman');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-diktuk-cpnspolri-pengumuman" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/diktuk-cpnspolri-pengumuman</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-diktuk-cpnspolri-pengumuman"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-diktuk-cpnspolri-pengumuman"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="diktuk-GETapi-post-diktuk-cpnspolri-persyaratan">Persyaratan cpnspolri</h2>

<p>
</p>



<span id="example-requests-GETapi-post-diktuk-cpnspolri-persyaratan">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/diktuk-cpnspolri-persyaratan" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/diktuk-cpnspolri-persyaratan"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-diktuk-cpnspolri-persyaratan">
            <blockquote>
            <p>Example response (200, When the thing was done smoothly.):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-diktuk-cpnspolri-persyaratan" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-diktuk-cpnspolri-persyaratan"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-diktuk-cpnspolri-persyaratan" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-diktuk-cpnspolri-persyaratan" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-diktuk-cpnspolri-persyaratan"></code></pre>
</span>
<form id="form-GETapi-post-diktuk-cpnspolri-persyaratan" data-method="GET"
      data-path="api/post/diktuk-cpnspolri-persyaratan"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-diktuk-cpnspolri-persyaratan', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-diktuk-cpnspolri-persyaratan"
                    onclick="tryItOut('GETapi-post-diktuk-cpnspolri-persyaratan');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-diktuk-cpnspolri-persyaratan"
                    onclick="cancelTryOut('GETapi-post-diktuk-cpnspolri-persyaratan');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-diktuk-cpnspolri-persyaratan" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/diktuk-cpnspolri-persyaratan</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-diktuk-cpnspolri-persyaratan"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-diktuk-cpnspolri-persyaratan"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="diktuk-GETapi-post-diktuk-cpnspolri-timeline">Timeline cpnspolri</h2>

<p>
</p>



<span id="example-requests-GETapi-post-diktuk-cpnspolri-timeline">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/diktuk-cpnspolri-timeline" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/diktuk-cpnspolri-timeline"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-diktuk-cpnspolri-timeline">
            <blockquote>
            <p>Example response (200, When the thing was done smoothly.):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-diktuk-cpnspolri-timeline" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-diktuk-cpnspolri-timeline"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-diktuk-cpnspolri-timeline" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-diktuk-cpnspolri-timeline" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-diktuk-cpnspolri-timeline"></code></pre>
</span>
<form id="form-GETapi-post-diktuk-cpnspolri-timeline" data-method="GET"
      data-path="api/post/diktuk-cpnspolri-timeline"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-diktuk-cpnspolri-timeline', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-diktuk-cpnspolri-timeline"
                    onclick="tryItOut('GETapi-post-diktuk-cpnspolri-timeline');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-diktuk-cpnspolri-timeline"
                    onclick="cancelTryOut('GETapi-post-diktuk-cpnspolri-timeline');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-diktuk-cpnspolri-timeline" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/diktuk-cpnspolri-timeline</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-diktuk-cpnspolri-timeline"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-diktuk-cpnspolri-timeline"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-register">Register new user</h2>

<p>
</p>

<p>Handle an incoming registration request.</p>

<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://pak_kepo.test/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"minima\",
    \"password\": \"molestiae\",
    \"email\": \"albertha81@example.com\",
    \"nomor_telpon\": \"sed\",
    \"fcm_token\": 574060.14718601,
    \"user_roles\": [
        \"aspernatur\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "minima",
    "password": "molestiae",
    "email": "albertha81@example.com",
    "nomor_telpon": "sed",
    "fcm_token": 574060.14718601,
    "user_roles": [
        "aspernatur"
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-register"
               value="minima"
               data-component="body">
    <br>
<p>Example: <code>minima</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-register"
               value="molestiae"
               data-component="body">
    <br>
<p>Example: <code>molestiae</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>email</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-register"
               value="albertha81@example.com"
               data-component="body">
    <br>
<p>Example: <code>albertha81@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nomor_telpon</code></b>&nbsp;&nbsp;
<small>numeric</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="nomor_telpon"                data-endpoint="POSTapi-register"
               value="sed"
               data-component="body">
    <br>
<p>Example: <code>sed</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>fcm_token</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="fcm_token"                data-endpoint="POSTapi-register"
               value="574060.14718601"
               data-component="body">
    <br>
<p>token fcm Example: <code>574060.14718601</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_roles</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="user_roles[0]"                data-endpoint="POSTapi-register"
               data-component="body">
        <input type="text" style="display: none"
               name="user_roles[1]"                data-endpoint="POSTapi-register"
               data-component="body">
    <br>
<p>example [3,4]. 4 = pengguna, 3 = kontributor</p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-login">Authentication</h2>

<p>
</p>

<p>Handle an incoming authentication request.</p>

<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://pak_kepo.test/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"dedric.jerde@example.net\",
    \"password\": \"!7xx&lt;@!xkbp@;4u4\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "dedric.jerde@example.net",
    "password": "!7xx&lt;@!xkbp@;4u4"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-login"
               value="dedric.jerde@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>dedric.jerde@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-login"
               value="!7xx<@!xkbp@;4u4"
               data-component="body">
    <br>
<p>Example: <code>!7xx&lt;@!xkbp@;4u4</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-reset-password">Reset Password</h2>

<p>
</p>

<p>Handle an incoming new password request.</p>

<span id="example-requests-POSTapi-reset-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://pak_kepo.test/api/reset-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"token\": \"ut\",
    \"email\": \"sonny.torp@example.net\",
    \"password\": \"exercitationem\",
    \"name\": \"sunt\",
    \"nomor_telpon\": \"voluptatibus\",
    \"fcm_token\": 512.9707,
    \"user_roles\": [
        \"vel\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/reset-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "token": "ut",
    "email": "sonny.torp@example.net",
    "password": "exercitationem",
    "name": "sunt",
    "nomor_telpon": "voluptatibus",
    "fcm_token": 512.9707,
    "user_roles": [
        "vel"
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-reset-password">
</span>
<span id="execution-results-POSTapi-reset-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-reset-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-reset-password" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-reset-password"></code></pre>
</span>
<form id="form-POSTapi-reset-password" data-method="POST"
      data-path="api/reset-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-reset-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-reset-password"
                    onclick="tryItOut('POSTapi-reset-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-reset-password"
                    onclick="cancelTryOut('POSTapi-reset-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-reset-password" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/reset-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>token</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="token"                data-endpoint="POSTapi-reset-password"
               value="ut"
               data-component="body">
    <br>
<p>Example: <code>ut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>email</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-reset-password"
               value="sonny.torp@example.net"
               data-component="body">
    <br>
<p>Example: <code>sonny.torp@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-reset-password"
               value="exercitationem"
               data-component="body">
    <br>
<p>Example: <code>exercitationem</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-reset-password"
               value="sunt"
               data-component="body">
    <br>
<p>Example: <code>sunt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nomor_telpon</code></b>&nbsp;&nbsp;
<small>numeric</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="nomor_telpon"                data-endpoint="POSTapi-reset-password"
               value="voluptatibus"
               data-component="body">
    <br>
<p>Example: <code>voluptatibus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>fcm_token</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="fcm_token"                data-endpoint="POSTapi-reset-password"
               value="512.9707"
               data-component="body">
    <br>
<p>token fcm Example: <code>512.9707</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_roles</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="user_roles[0]"                data-endpoint="POSTapi-reset-password"
               data-component="body">
        <input type="text" style="display: none"
               name="user_roles[1]"                data-endpoint="POSTapi-reset-password"
               data-component="body">
    <br>
<p>example [3,4]. 4 = pengguna, 3 = kontributor</p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-fcm_token--fcmToken-">POST api/fcm_token/{fcmToken}</h2>

<p>
</p>



<span id="example-requests-POSTapi-fcm_token--fcmToken-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://pak_kepo.test/api/fcm_token/et" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/fcm_token/et"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-fcm_token--fcmToken-">
</span>
<span id="execution-results-POSTapi-fcm_token--fcmToken-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-fcm_token--fcmToken-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-fcm_token--fcmToken-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-fcm_token--fcmToken-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-fcm_token--fcmToken-"></code></pre>
</span>
<form id="form-POSTapi-fcm_token--fcmToken-" data-method="POST"
      data-path="api/fcm_token/{fcmToken}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-fcm_token--fcmToken-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-fcm_token--fcmToken-"
                    onclick="tryItOut('POSTapi-fcm_token--fcmToken-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-fcm_token--fcmToken-"
                    onclick="cancelTryOut('POSTapi-fcm_token--fcmToken-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-fcm_token--fcmToken-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/fcm_token/{fcmToken}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-fcm_token--fcmToken-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-fcm_token--fcmToken-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fcmToken</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="fcmToken"                data-endpoint="POSTapi-fcm_token--fcmToken-"
               value="et"
               data-component="url">
    <br>
<p>Example: <code>et</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-post">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-post">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
  &lt;head&gt;
    &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot;&gt;
    &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;meta name=&quot;description&quot; content=&quot;viho admin is super flexible, powerful, clean &amp;amp; modern responsive bootstrap 4 admin template with unlimited possibilities. laravel/framework: ^8.40&quot;&gt;
    &lt;meta name=&quot;keywords&quot; content=&quot;admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app&quot;&gt;
    &lt;meta name=&quot;author&quot; content=&quot;pixelstrap&quot;&gt;
    &lt;link rel=&quot;icon&quot; href=&quot;http://pak_kepo.test/assets/images/favicon.png&quot; type=&quot;image/x-icon&quot;&gt;
    &lt;link rel=&quot;shortcut icon&quot; href=&quot;http://pak_kepo.test/assets/images/favicon.png&quot; type=&quot;image/x-icon&quot;&gt;
    &lt;title&gt;&lt;/title&gt;
    &lt;!-- Google font--&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.gstatic.com&quot;&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;!-- Font Awesome--&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/fontawesome.css&quot;&gt;
    &lt;!-- ico-font--&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/icofont.css&quot;&gt;
    &lt;!-- Themify icon--&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/themify.css&quot;&gt;
    &lt;!-- Flag icon--&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/flag-icon.css&quot;&gt;
    &lt;!-- Feather icon--&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/feather-icon.css&quot;&gt;
    &lt;!-- Plugins css start--&gt;
        &lt;!-- Plugins css Ends--&gt;
    &lt;!-- Bootstrap css--&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/bootstrap.css&quot;&gt;
    &lt;!-- App css--&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/style.css&quot;&gt;
    &lt;link id=&quot;color&quot; rel=&quot;stylesheet&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/color-1.css&quot; media=&quot;screen&quot;&gt;
    &lt;!-- Responsive css--&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/responsive.css&quot;&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;!-- Loader starts--&gt;
    &lt;div class=&quot;loader-wrapper&quot;&gt;
      &lt;div class=&quot;theme-loader&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- Loader ends--&gt;
    &lt;!-- page-wrapper Start--&gt;
    &lt;div class=&quot;page-wrapper compact-sidebar&quot; id=&quot;pageWrapper&quot;&gt;
      &lt;!-- Page Header Start--&gt;
      &lt;div class=&quot;page-main-header&quot;&gt;
        &lt;div class=&quot;main-header-right row m-0&quot;&gt;
          &lt;div class=&quot;main-header-left&quot;&gt;
            &lt;div class=&quot;logo-wrapper&quot;&gt;&lt;a href=&quot;http://pak_kepo.test&quot;&gt;&lt;img class=&quot;img-fluid&quot; src=&quot;http://pak_kepo.test/assets/images/logo/logo.png&quot; alt=&quot;&quot;&gt;PakKepo&lt;/a&gt;&lt;/div&gt;
            &lt;div class=&quot;dark-logo-wrapper&quot;&gt;&lt;a href=&quot;http://pak_kepo.test&quot;&gt;&lt;img class=&quot;img-fluid&quot; src=&quot;http://pak_kepo.test/assets/images/logo/dark-logo.png&quot; alt=&quot;&quot;&gt;PakKepo&lt;/a&gt;&lt;/div&gt;
            &lt;div class=&quot;toggle-sidebar&quot;&gt;&lt;i class=&quot;status_toggle middle&quot; data-feather=&quot;align-center&quot; id=&quot;sidebar-toggle&quot;&gt;    &lt;/i&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;left-menu-header col&quot;&gt;
            &lt;ul&gt;
              &lt;li&gt;
                
              &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
          &lt;div class=&quot;nav-right col pull-right right-menu p-0&quot;&gt;
            &lt;ul class=&quot;nav-menus&quot;&gt;
              &lt;li class=&quot;onhover-dropdown p-0&quot;&gt;
                &lt;a class=&quot;btn btn-primary-light&quot; href=&quot;http://pak_kepo.test/logout&quot; type=&quot;button&quot;&gt;&lt;i data-feather=&quot;log-out&quot;&gt;&lt;/i&gt;Log out&lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
          &lt;div class=&quot;d-lg-none mobile-toggle pull-right w-auto&quot;&gt;&lt;i data-feather=&quot;more-horizontal&quot;&gt;&lt;/i&gt;&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- Page Header Ends --&gt;
      &lt;!-- Page Body Start--&gt;
      &lt;div class=&quot;page-body-wrapper sidebar-icon&quot;&gt;
        &lt;!-- Page Sidebar Start--&gt;
        &lt;header class=&quot;main-nav&quot;&gt;
            &lt;!-- Menu Start--&gt;
            &lt;nav&gt;
    &lt;div class=&quot;main-navbar&quot;&gt;
        &lt;div id=&quot;mainnav&quot;&gt;
            &lt;ul class=&quot;nav-menu custom-scrollbar&quot;&gt;
                &lt;li&gt;&lt;/li&gt;
    &lt;li class=&quot;sidebar-main-title&quot;&gt;
    &lt;div&gt;
        &lt;h6&gt;General&lt;/h6&gt;
    &lt;/div&gt;
&lt;/li&gt;

                                                                                                                        &lt;li&gt;
                &lt;a class=&quot;nav-link menu-title &quot;
                    href=&quot;http://localhost/pak_kepo/public/admin/browse/berita&quot;&gt;
                    &lt;i data-feather=&quot;box&quot;&gt;&lt;/i&gt;&lt;span&gt;Berita&lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
                                &lt;li&gt;
                &lt;a class=&quot;nav-link menu-title &quot;
                    href=&quot;http://localhost/pak_kepo/public/admin/browse/pakbhabinkepo&quot;&gt;
                    &lt;i data-feather=&quot;box&quot;&gt;&lt;/i&gt;&lt;span&gt;Pak Bhabin KEPO&lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
                                &lt;li&gt;
                &lt;a class=&quot;nav-link menu-title &quot;
                    href=&quot;http://localhost/pak_kepo/public/admin/user&quot;&gt;
                    &lt;i data-feather=&quot;box&quot;&gt;&lt;/i&gt;&lt;span&gt;Pengguna&lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
                                &lt;li&gt;
                &lt;a class=&quot;nav-link menu-title &quot;
                    href=&quot;http://localhost/pak_kepo/public/admin/comment&quot;&gt;
                    &lt;i data-feather=&quot;box&quot;&gt;&lt;/i&gt;&lt;span&gt;Komentar&lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
                                &lt;li&gt;
                &lt;a class=&quot;nav-link menu-title &quot;
                    href=&quot;http://localhost/pak_kepo/public/admin/galeri&quot;&gt;
                    &lt;i data-feather=&quot;box&quot;&gt;&lt;/i&gt;&lt;span&gt;Galeri&lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/nav&gt;

            &lt;!-- end menu --&gt;
            &lt;!-- start user info --&gt;
            
        &lt;/header&gt;

        &lt;!-- Page Sidebar Ends--&gt;
        &lt;div class=&quot;page-body&quot;&gt;
          &lt;!-- Container-fluid starts--&gt;
          
&lt;div class=&quot;d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom&quot;&gt;
    &lt;h2&gt;Konten
        
    &lt;/h2&gt;
&lt;/div&gt;
&lt;div class=&quot;card&quot;&gt;
    &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;&quot;&gt;      &lt;div class=&quot;table-responsive&quot;&gt;
        &lt;table class=&quot;table table-sm table-stripe&quot;&gt;
            &lt;thead class=&quot;&quot;&gt;
                &lt;tr&gt;
                    &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;

                                            &lt;th scope=&quot;col&quot;&gt;Judul&lt;/th&gt;
                                            &lt;th scope=&quot;col&quot;&gt;Isi&lt;/th&gt;
                                            &lt;th scope=&quot;col&quot;&gt;Status&lt;/th&gt;
                                        &lt;th scope=&quot;col&quot;&gt;&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                                                                                                                                                                                                                                                                                                                                                                                                    &lt;/tbody&gt;
        &lt;/table&gt;
                    &lt;nav class=&quot;d-flex justify-items-center justify-content-between&quot;&gt;
        &lt;div class=&quot;d-flex justify-content-between flex-fill d-sm-none&quot;&gt;
            &lt;ul class=&quot;pagination&quot;&gt;
                
                                    &lt;li class=&quot;page-item disabled&quot; aria-disabled=&quot;true&quot;&gt;
                        &lt;span class=&quot;page-link&quot;&gt;&amp;laquo; Previous&lt;/span&gt;
                    &lt;/li&gt;
                
                
                                    &lt;li class=&quot;page-item&quot;&gt;
                        &lt;a class=&quot;page-link&quot; href=&quot;http://pak_kepo.test/api/post?page=2&quot; rel=&quot;next&quot;&gt;Next &amp;raquo;&lt;/a&gt;
                    &lt;/li&gt;
                            &lt;/ul&gt;
        &lt;/div&gt;

        &lt;div class=&quot;d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between&quot;&gt;
            &lt;div&gt;
                &lt;p class=&quot;small text-muted&quot;&gt;
                    Showing
                    &lt;span class=&quot;fw-semibold&quot;&gt;1&lt;/span&gt;
                    to
                    &lt;span class=&quot;fw-semibold&quot;&gt;10&lt;/span&gt;
                    of
                    &lt;span class=&quot;fw-semibold&quot;&gt;20&lt;/span&gt;
                    results
                &lt;/p&gt;
            &lt;/div&gt;

            &lt;div&gt;
                &lt;ul class=&quot;pagination&quot;&gt;
                    
                                            &lt;li class=&quot;page-item disabled&quot; aria-disabled=&quot;true&quot; aria-label=&quot;&amp;laquo; Previous&quot;&gt;
                            &lt;span class=&quot;page-link&quot; aria-hidden=&quot;true&quot;&gt;&amp;lsaquo;&lt;/span&gt;
                        &lt;/li&gt;
                    
                    
                                            
                        
                        
                                                                                                                        &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;&lt;span class=&quot;page-link&quot;&gt;1&lt;/span&gt;&lt;/li&gt;
                                                                                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;http://pak_kepo.test/api/post?page=2&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                                                                        
                    
                                            &lt;li class=&quot;page-item&quot;&gt;
                            &lt;a class=&quot;page-link&quot; href=&quot;http://pak_kepo.test/api/post?page=2&quot; rel=&quot;next&quot; aria-label=&quot;Next &amp;raquo;&quot;&gt;&amp;rsaquo;&lt;/a&gt;
                        &lt;/li&gt;
                                    &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/nav&gt;

            Menampilkan record 1 sampai 20

            &lt;/div&gt;
&lt;/div&gt;


&lt;script type=&quot;text/javascript&quot;&gt;
    /*
    DELETE
    */
    function destroy(action,id=&#039;&#039;){
        var isConfirm=confirm(&#039;anda yakin menghapus&#039;);
        var csrfToken=$(&quot;input[name=&#039;_token&#039;]&quot;).val();
        if(isConfirm){

            $.post(action, {&#039;_method&#039;:&#039;delete&#039;,&#039;_token&#039;:csrfToken},function( data ) {
                                    document.location.href=&#039;http://pak_kepo.test/admin/post&#039;;
                
            },&#039;json&#039;);
        }
    }

&lt;/script&gt;

          &lt;!-- Container-fluid Ends--&gt;
        &lt;/div&gt;
        &lt;!-- footer start--&gt;
        &lt;footer class=&quot;footer&quot;&gt;
          &lt;div class=&quot;container-fluid&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
              &lt;div class=&quot;col-md-6 footer-copyright&quot;&gt;
                
              &lt;/div&gt;
              &lt;div class=&quot;col-md-6&quot;&gt;
                
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/footer&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- latest jquery--&gt;
    &lt;script src=&quot;http://pak_kepo.test/theme/viho/assets/js/jquery-3.5.1.min.js&quot;&gt;&lt;/script&gt;
    &lt;!-- CKEDITOR --&gt;

    &lt;script src=&quot;//cdn.ckeditor.com/4.20.1/standard/ckeditor.js&quot;&gt;&lt;/script&gt;
    &lt;script type=&quot;text/javascript&quot;&gt;
        $(document).ready(function () {
            $(&#039;.ckeditor&#039;).ckeditor();
        });
    &lt;/script&gt;
    &lt;!-- feather icon js--&gt;
    &lt;script src=&quot;http://pak_kepo.test/theme/viho/assets/js/icons/feather-icon/feather.min.js&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;http://pak_kepo.test/theme/viho/assets/js/icons/feather-icon/feather-icon.js&quot;&gt;&lt;/script&gt;
    &lt;!-- Sidebar jquery--&gt;
    &lt;script src=&quot;http://pak_kepo.test/theme/viho/assets/js/sidebar-menu.js&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;http://pak_kepo.test/theme/viho/assets/js/config.js&quot;&gt;&lt;/script&gt;
    &lt;!-- Bootstrap js--&gt;
    &lt;script src=&quot;http://pak_kepo.test/theme/viho/assets/js/bootstrap/popper.min.js&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;http://pak_kepo.test/theme/viho/assets/js/bootstrap/bootstrap.min.js&quot;&gt;&lt;/script&gt;
    &lt;!-- Plugins JS start--&gt;
        &lt;!-- Plugins JS Ends--&gt;
    &lt;!-- Theme js--&gt;
    &lt;script src=&quot;http://pak_kepo.test/theme/viho/assets/js/script.js&quot;&gt;&lt;/script&gt;
    &lt;!-- Plugin used--&gt;
  &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-post" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post"></code></pre>
</span>
<form id="form-GETapi-post" data-method="GET"
      data-path="api/post"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post"
                    onclick="tryItOut('GETapi-post');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post"
                    onclick="cancelTryOut('GETapi-post');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-post-category--slug-">Show all POST by kategori</h2>

<p>
</p>

<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>

<span id="example-requests-GETapi-post-category--slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/category/voluptatem" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/category/voluptatem"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-category--slug-">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-category--slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-category--slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-category--slug-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-category--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-category--slug-"></code></pre>
</span>
<form id="form-GETapi-post-category--slug-" data-method="GET"
      data-path="api/post/category/{slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-category--slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-category--slug-"
                    onclick="tryItOut('GETapi-post-category--slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-category--slug-"
                    onclick="cancelTryOut('GETapi-post-category--slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-category--slug-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/category/{slug}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-category--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-category--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="slug"                data-endpoint="GETapi-post-category--slug-"
               value="voluptatem"
               data-component="url">
    <br>
<p>The slug of the category. Example: <code>voluptatem</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-post--slug-">Show a POST by slug</h2>

<p>
</p>

<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>

<span id="example-requests-GETapi-post--slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post--slug-">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-post--slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post--slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post--slug-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post--slug-"></code></pre>
</span>
<form id="form-GETapi-post--slug-" data-method="GET"
      data-path="api/post/{slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post--slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post--slug-"
                    onclick="tryItOut('GETapi-post--slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post--slug-"
                    onclick="cancelTryOut('GETapi-post--slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post--slug-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/{slug}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="slug"                data-endpoint="GETapi-post--slug-"
               value="1"
               data-component="url">
    <br>
<p>The slug of the post. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-page">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-page">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/page" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/page"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-page">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-page" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-page"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-page" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-page" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-page"></code></pre>
</span>
<form id="form-GETapi-page" data-method="GET"
      data-path="api/page"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-page', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-page"
                    onclick="tryItOut('GETapi-page');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-page"
                    onclick="cancelTryOut('GETapi-page');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-page" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/page</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-page"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-page"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-page--slug-">Show a POST by slug</h2>

<p>
</p>

<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>

<span id="example-requests-GETapi-page--slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/page/voluptatem" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/page/voluptatem"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-page--slug-">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre></details>         <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-page--slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-page--slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-page--slug-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-page--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-page--slug-"></code></pre>
</span>
<form id="form-GETapi-page--slug-" data-method="GET"
      data-path="api/page/{slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-page--slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-page--slug-"
                    onclick="tryItOut('GETapi-page--slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-page--slug-"
                    onclick="cancelTryOut('GETapi-page--slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-page--slug-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/page/{slug}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-page--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-page--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="slug"                data-endpoint="GETapi-page--slug-"
               value="voluptatem"
               data-component="url">
    <br>
<p>The slug of the page. Example: <code>voluptatem</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-media">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-media">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/media" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/media"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-media">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-media" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-media"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-media" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-media" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-media"></code></pre>
</span>
<form id="form-GETapi-media" data-method="GET"
      data-path="api/media"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-media', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-media"
                    onclick="tryItOut('GETapi-media');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-media"
                    onclick="cancelTryOut('GETapi-media');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-media" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/media</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-media"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-media"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-media-category--slug-">Show all POST by kategori</h2>

<p>
</p>

<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>

<span id="example-requests-GETapi-media-category--slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/media/category/assumenda" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/media/category/assumenda"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-media-category--slug-">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre></details>         <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-media-category--slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-media-category--slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-media-category--slug-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-media-category--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-media-category--slug-"></code></pre>
</span>
<form id="form-GETapi-media-category--slug-" data-method="GET"
      data-path="api/media/category/{slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-media-category--slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-media-category--slug-"
                    onclick="tryItOut('GETapi-media-category--slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-media-category--slug-"
                    onclick="cancelTryOut('GETapi-media-category--slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-media-category--slug-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/media/category/{slug}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-media-category--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-media-category--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="slug"                data-endpoint="GETapi-media-category--slug-"
               value="assumenda"
               data-component="url">
    <br>
<p>The slug of the category. Example: <code>assumenda</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-media--slug-">Show a POST by slug</h2>

<p>
</p>

<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>

<span id="example-requests-GETapi-media--slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/media/tempora" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/media/tempora"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-media--slug-">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre></details>         <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-media--slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-media--slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-media--slug-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-media--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-media--slug-"></code></pre>
</span>
<form id="form-GETapi-media--slug-" data-method="GET"
      data-path="api/media/{slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-media--slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-media--slug-"
                    onclick="tryItOut('GETapi-media--slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-media--slug-"
                    onclick="cancelTryOut('GETapi-media--slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-media--slug-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/media/{slug}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-media--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-media--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="slug"                data-endpoint="GETapi-media--slug-"
               value="tempora"
               data-component="url">
    <br>
<p>The slug of the medium. Example: <code>tempora</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-post_category">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-post_category">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post_category" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post_category"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post_category">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
  &lt;head&gt;
    &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot;&gt;
    &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;meta name=&quot;description&quot; content=&quot;viho admin is super flexible, powerful, clean &amp;amp; modern responsive bootstrap 4 admin template with unlimited possibilities. laravel/framework: ^8.40&quot;&gt;
    &lt;meta name=&quot;keywords&quot; content=&quot;admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app&quot;&gt;
    &lt;meta name=&quot;author&quot; content=&quot;pixelstrap&quot;&gt;
    &lt;link rel=&quot;icon&quot; href=&quot;http://pak_kepo.test/assets/images/favicon.png&quot; type=&quot;image/x-icon&quot;&gt;
    &lt;link rel=&quot;shortcut icon&quot; href=&quot;http://pak_kepo.test/assets/images/favicon.png&quot; type=&quot;image/x-icon&quot;&gt;
    &lt;title&gt;&lt;/title&gt;
    &lt;!-- Google font--&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.gstatic.com&quot;&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;!-- Font Awesome--&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/fontawesome.css&quot;&gt;
    &lt;!-- ico-font--&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/icofont.css&quot;&gt;
    &lt;!-- Themify icon--&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/themify.css&quot;&gt;
    &lt;!-- Flag icon--&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/flag-icon.css&quot;&gt;
    &lt;!-- Feather icon--&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/feather-icon.css&quot;&gt;
    &lt;!-- Plugins css start--&gt;
        &lt;!-- Plugins css Ends--&gt;
    &lt;!-- Bootstrap css--&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/bootstrap.css&quot;&gt;
    &lt;!-- App css--&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/style.css&quot;&gt;
    &lt;link id=&quot;color&quot; rel=&quot;stylesheet&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/color-1.css&quot; media=&quot;screen&quot;&gt;
    &lt;!-- Responsive css--&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://pak_kepo.test/theme/viho/assets/css/responsive.css&quot;&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;!-- Loader starts--&gt;
    &lt;div class=&quot;loader-wrapper&quot;&gt;
      &lt;div class=&quot;theme-loader&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- Loader ends--&gt;
    &lt;!-- page-wrapper Start--&gt;
    &lt;div class=&quot;page-wrapper compact-sidebar&quot; id=&quot;pageWrapper&quot;&gt;
      &lt;!-- Page Header Start--&gt;
      &lt;div class=&quot;page-main-header&quot;&gt;
        &lt;div class=&quot;main-header-right row m-0&quot;&gt;
          &lt;div class=&quot;main-header-left&quot;&gt;
            &lt;div class=&quot;logo-wrapper&quot;&gt;&lt;a href=&quot;http://pak_kepo.test&quot;&gt;&lt;img class=&quot;img-fluid&quot; src=&quot;http://pak_kepo.test/assets/images/logo/logo.png&quot; alt=&quot;&quot;&gt;PakKepo&lt;/a&gt;&lt;/div&gt;
            &lt;div class=&quot;dark-logo-wrapper&quot;&gt;&lt;a href=&quot;http://pak_kepo.test&quot;&gt;&lt;img class=&quot;img-fluid&quot; src=&quot;http://pak_kepo.test/assets/images/logo/dark-logo.png&quot; alt=&quot;&quot;&gt;PakKepo&lt;/a&gt;&lt;/div&gt;
            &lt;div class=&quot;toggle-sidebar&quot;&gt;&lt;i class=&quot;status_toggle middle&quot; data-feather=&quot;align-center&quot; id=&quot;sidebar-toggle&quot;&gt;    &lt;/i&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;left-menu-header col&quot;&gt;
            &lt;ul&gt;
              &lt;li&gt;
                
              &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
          &lt;div class=&quot;nav-right col pull-right right-menu p-0&quot;&gt;
            &lt;ul class=&quot;nav-menus&quot;&gt;
              &lt;li class=&quot;onhover-dropdown p-0&quot;&gt;
                &lt;a class=&quot;btn btn-primary-light&quot; href=&quot;http://pak_kepo.test/logout&quot; type=&quot;button&quot;&gt;&lt;i data-feather=&quot;log-out&quot;&gt;&lt;/i&gt;Log out&lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
          &lt;div class=&quot;d-lg-none mobile-toggle pull-right w-auto&quot;&gt;&lt;i data-feather=&quot;more-horizontal&quot;&gt;&lt;/i&gt;&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- Page Header Ends --&gt;
      &lt;!-- Page Body Start--&gt;
      &lt;div class=&quot;page-body-wrapper sidebar-icon&quot;&gt;
        &lt;!-- Page Sidebar Start--&gt;
        &lt;header class=&quot;main-nav&quot;&gt;
            &lt;!-- Menu Start--&gt;
            &lt;nav&gt;
    &lt;div class=&quot;main-navbar&quot;&gt;
        &lt;div id=&quot;mainnav&quot;&gt;
            &lt;ul class=&quot;nav-menu custom-scrollbar&quot;&gt;
                &lt;li&gt;&lt;/li&gt;
    &lt;li class=&quot;sidebar-main-title&quot;&gt;
    &lt;div&gt;
        &lt;h6&gt;General&lt;/h6&gt;
    &lt;/div&gt;
&lt;/li&gt;

                                                                                                                        &lt;li&gt;
                &lt;a class=&quot;nav-link menu-title &quot;
                    href=&quot;http://localhost/pak_kepo/public/admin/browse/berita&quot;&gt;
                    &lt;i data-feather=&quot;box&quot;&gt;&lt;/i&gt;&lt;span&gt;Berita&lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
                                &lt;li&gt;
                &lt;a class=&quot;nav-link menu-title &quot;
                    href=&quot;http://localhost/pak_kepo/public/admin/browse/pakbhabinkepo&quot;&gt;
                    &lt;i data-feather=&quot;box&quot;&gt;&lt;/i&gt;&lt;span&gt;Pak Bhabin KEPO&lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
                                &lt;li&gt;
                &lt;a class=&quot;nav-link menu-title &quot;
                    href=&quot;http://localhost/pak_kepo/public/admin/user&quot;&gt;
                    &lt;i data-feather=&quot;box&quot;&gt;&lt;/i&gt;&lt;span&gt;Pengguna&lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
                                &lt;li&gt;
                &lt;a class=&quot;nav-link menu-title &quot;
                    href=&quot;http://localhost/pak_kepo/public/admin/comment&quot;&gt;
                    &lt;i data-feather=&quot;box&quot;&gt;&lt;/i&gt;&lt;span&gt;Komentar&lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
                                &lt;li&gt;
                &lt;a class=&quot;nav-link menu-title &quot;
                    href=&quot;http://localhost/pak_kepo/public/admin/galeri&quot;&gt;
                    &lt;i data-feather=&quot;box&quot;&gt;&lt;/i&gt;&lt;span&gt;Galeri&lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/nav&gt;

            &lt;!-- end menu --&gt;
            &lt;!-- start user info --&gt;
            
        &lt;/header&gt;

        &lt;!-- Page Sidebar Ends--&gt;
        &lt;div class=&quot;page-body&quot;&gt;
          &lt;!-- Container-fluid starts--&gt;
          
&lt;div class=&quot;d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom&quot;&gt;
    &lt;h2&gt;Kategori
        
    &lt;/h2&gt;
&lt;/div&gt;
&lt;div class=&quot;card&quot;&gt;
    &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;&quot;&gt;      &lt;div class=&quot;table-responsive&quot;&gt;
        &lt;table class=&quot;table table-sm table-stripe&quot;&gt;
            &lt;thead class=&quot;&quot;&gt;
                &lt;tr&gt;
                    &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;

                                            &lt;th scope=&quot;col&quot;&gt;Nama Kategori&lt;/th&gt;
                                            &lt;th scope=&quot;col&quot;&gt;Deskripsi&lt;/th&gt;
                                        &lt;th scope=&quot;col&quot;&gt;&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                                                                                                                                                                                                                                                                                                                                                                                                    &lt;/tbody&gt;
        &lt;/table&gt;
                    &lt;nav class=&quot;d-flex justify-items-center justify-content-between&quot;&gt;
        &lt;div class=&quot;d-flex justify-content-between flex-fill d-sm-none&quot;&gt;
            &lt;ul class=&quot;pagination&quot;&gt;
                
                                    &lt;li class=&quot;page-item disabled&quot; aria-disabled=&quot;true&quot;&gt;
                        &lt;span class=&quot;page-link&quot;&gt;&amp;laquo; Previous&lt;/span&gt;
                    &lt;/li&gt;
                
                
                                    &lt;li class=&quot;page-item&quot;&gt;
                        &lt;a class=&quot;page-link&quot; href=&quot;http://pak_kepo.test/api/post_category?page=2&quot; rel=&quot;next&quot;&gt;Next &amp;raquo;&lt;/a&gt;
                    &lt;/li&gt;
                            &lt;/ul&gt;
        &lt;/div&gt;

        &lt;div class=&quot;d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between&quot;&gt;
            &lt;div&gt;
                &lt;p class=&quot;small text-muted&quot;&gt;
                    Showing
                    &lt;span class=&quot;fw-semibold&quot;&gt;1&lt;/span&gt;
                    to
                    &lt;span class=&quot;fw-semibold&quot;&gt;10&lt;/span&gt;
                    of
                    &lt;span class=&quot;fw-semibold&quot;&gt;22&lt;/span&gt;
                    results
                &lt;/p&gt;
            &lt;/div&gt;

            &lt;div&gt;
                &lt;ul class=&quot;pagination&quot;&gt;
                    
                                            &lt;li class=&quot;page-item disabled&quot; aria-disabled=&quot;true&quot; aria-label=&quot;&amp;laquo; Previous&quot;&gt;
                            &lt;span class=&quot;page-link&quot; aria-hidden=&quot;true&quot;&gt;&amp;lsaquo;&lt;/span&gt;
                        &lt;/li&gt;
                    
                    
                                            
                        
                        
                                                                                                                        &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;&lt;span class=&quot;page-link&quot;&gt;1&lt;/span&gt;&lt;/li&gt;
                                                                                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;http://pak_kepo.test/api/post_category?page=2&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                                                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;http://pak_kepo.test/api/post_category?page=3&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                                                                        
                    
                                            &lt;li class=&quot;page-item&quot;&gt;
                            &lt;a class=&quot;page-link&quot; href=&quot;http://pak_kepo.test/api/post_category?page=2&quot; rel=&quot;next&quot; aria-label=&quot;Next &amp;raquo;&quot;&gt;&amp;rsaquo;&lt;/a&gt;
                        &lt;/li&gt;
                                    &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/nav&gt;

            Menampilkan record 1 sampai 22

            &lt;/div&gt;
&lt;/div&gt;


&lt;script type=&quot;text/javascript&quot;&gt;
    /*
    DELETE
    */
    function destroy(action,id=&#039;&#039;){
        var isConfirm=confirm(&#039;anda yakin menghapus&#039;);
        var csrfToken=$(&quot;input[name=&#039;_token&#039;]&quot;).val();
        if(isConfirm){

            $.post(action, {&#039;_method&#039;:&#039;delete&#039;,&#039;_token&#039;:csrfToken},function( data ) {
                                    document.location.href=&#039;http://pak_kepo.test/admin/category&#039;;
                
            },&#039;json&#039;);
        }
    }

&lt;/script&gt;

          &lt;!-- Container-fluid Ends--&gt;
        &lt;/div&gt;
        &lt;!-- footer start--&gt;
        &lt;footer class=&quot;footer&quot;&gt;
          &lt;div class=&quot;container-fluid&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
              &lt;div class=&quot;col-md-6 footer-copyright&quot;&gt;
                
              &lt;/div&gt;
              &lt;div class=&quot;col-md-6&quot;&gt;
                
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/footer&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- latest jquery--&gt;
    &lt;script src=&quot;http://pak_kepo.test/theme/viho/assets/js/jquery-3.5.1.min.js&quot;&gt;&lt;/script&gt;
    &lt;!-- CKEDITOR --&gt;

    &lt;script src=&quot;//cdn.ckeditor.com/4.20.1/standard/ckeditor.js&quot;&gt;&lt;/script&gt;
    &lt;script type=&quot;text/javascript&quot;&gt;
        $(document).ready(function () {
            $(&#039;.ckeditor&#039;).ckeditor();
        });
    &lt;/script&gt;
    &lt;!-- feather icon js--&gt;
    &lt;script src=&quot;http://pak_kepo.test/theme/viho/assets/js/icons/feather-icon/feather.min.js&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;http://pak_kepo.test/theme/viho/assets/js/icons/feather-icon/feather-icon.js&quot;&gt;&lt;/script&gt;
    &lt;!-- Sidebar jquery--&gt;
    &lt;script src=&quot;http://pak_kepo.test/theme/viho/assets/js/sidebar-menu.js&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;http://pak_kepo.test/theme/viho/assets/js/config.js&quot;&gt;&lt;/script&gt;
    &lt;!-- Bootstrap js--&gt;
    &lt;script src=&quot;http://pak_kepo.test/theme/viho/assets/js/bootstrap/popper.min.js&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;http://pak_kepo.test/theme/viho/assets/js/bootstrap/bootstrap.min.js&quot;&gt;&lt;/script&gt;
    &lt;!-- Plugins JS start--&gt;
        &lt;!-- Plugins JS Ends--&gt;
    &lt;!-- Theme js--&gt;
    &lt;script src=&quot;http://pak_kepo.test/theme/viho/assets/js/script.js&quot;&gt;&lt;/script&gt;
    &lt;!-- Plugin used--&gt;
  &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-post_category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post_category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post_category" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post_category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post_category"></code></pre>
</span>
<form id="form-GETapi-post_category" data-method="GET"
      data-path="api/post_category"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post_category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post_category"
                    onclick="tryItOut('GETapi-post_category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post_category"
                    onclick="cancelTryOut('GETapi-post_category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post_category" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post_category</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post_category"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post_category"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-forum">GET api/forum</h2>

<p>
</p>



<span id="example-requests-GETapi-forum">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/forum" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/forum"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-forum">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 52
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://pak_kepo.test/api/forum?page=1&quot;,
        &quot;last&quot;: &quot;http://pak_kepo.test/api/forum?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: null,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://pak_kepo.test/api/forum?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://pak_kepo.test/api/forum&quot;,
        &quot;per_page&quot;: 10,
        &quot;to&quot;: null,
        &quot;total&quot;: 0
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-forum" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-forum"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-forum" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-forum" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-forum"></code></pre>
</span>
<form id="form-GETapi-forum" data-method="GET"
      data-path="api/forum"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-forum', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-forum"
                    onclick="tryItOut('GETapi-forum');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-forum"
                    onclick="cancelTryOut('GETapi-forum');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-forum" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/forum</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-forum"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-forum"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-forum--forum_id-">GET api/forum/{forum_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-forum--forum_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/forum/9" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/forum/9"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-forum--forum_id-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 51
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Forum] 9&quot;,
    &quot;exception&quot;: &quot;Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException&quot;,
    &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php&quot;,
    &quot;line&quot;: 380,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php&quot;,
            &quot;line&quot;: 356,
            &quot;function&quot;: &quot;prepareException&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Exceptions\\Handler&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\nunomaduro\\collision\\src\\Adapters\\Laravel\\ExceptionHandler.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;render&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Exceptions\\Handler&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php&quot;,
            &quot;line&quot;: 51,
            &quot;function&quot;: &quot;render&quot;,
            &quot;class&quot;: &quot;NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 185,
            &quot;function&quot;: &quot;handleException&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 126,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;handleRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;handleRequestUsingNamedLimiter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 726,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 703,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 667,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 656,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php&quot;,
            &quot;line&quot;: 62,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 142,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 92,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 209,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 166,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 95,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 122,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 69,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 47,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 51,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 651,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 144,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 308,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 126,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 1002,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 171,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-forum--forum_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-forum--forum_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-forum--forum_id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-forum--forum_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-forum--forum_id-"></code></pre>
</span>
<form id="form-GETapi-forum--forum_id-" data-method="GET"
      data-path="api/forum/{forum_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-forum--forum_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-forum--forum_id-"
                    onclick="tryItOut('GETapi-forum--forum_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-forum--forum_id-"
                    onclick="cancelTryOut('GETapi-forum--forum_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-forum--forum_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/forum/{forum_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-forum--forum_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-forum--forum_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>forum_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="forum_id"                data-endpoint="GETapi-forum--forum_id-"
               value="9"
               data-component="url">
    <br>
<p>The ID of the forum. Example: <code>9</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-forum">POST api/forum</h2>

<p>
</p>



<span id="example-requests-POSTapi-forum">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://pak_kepo.test/api/forum" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"konten_forum\": \"nobis\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/forum"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "konten_forum": "nobis"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-forum">
</span>
<span id="execution-results-POSTapi-forum" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-forum"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-forum" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-forum" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-forum"></code></pre>
</span>
<form id="form-POSTapi-forum" data-method="POST"
      data-path="api/forum"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-forum', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-forum"
                    onclick="tryItOut('POSTapi-forum');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-forum"
                    onclick="cancelTryOut('POSTapi-forum');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-forum" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/forum</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-forum"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-forum"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>konten_forum</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="konten_forum"                data-endpoint="POSTapi-forum"
               value="nobis"
               data-component="body">
    <br>
<p>Example: <code>nobis</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-forum--forum_id-">PATCH api/forum/{forum_id}</h2>

<p>
</p>



<span id="example-requests-PATCHapi-forum--forum_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://pak_kepo.test/api/forum/7" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"konten_forum\": \"vero\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/forum/7"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "konten_forum": "vero"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-forum--forum_id-">
</span>
<span id="execution-results-PATCHapi-forum--forum_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-forum--forum_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-forum--forum_id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-forum--forum_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-forum--forum_id-"></code></pre>
</span>
<form id="form-PATCHapi-forum--forum_id-" data-method="PATCH"
      data-path="api/forum/{forum_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-forum--forum_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-forum--forum_id-"
                    onclick="tryItOut('PATCHapi-forum--forum_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-forum--forum_id-"
                    onclick="cancelTryOut('PATCHapi-forum--forum_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-forum--forum_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/forum/{forum_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PATCHapi-forum--forum_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PATCHapi-forum--forum_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>forum_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="forum_id"                data-endpoint="PATCHapi-forum--forum_id-"
               value="7"
               data-component="url">
    <br>
<p>The ID of the forum. Example: <code>7</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>konten_forum</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="konten_forum"                data-endpoint="PATCHapi-forum--forum_id-"
               value="vero"
               data-component="body">
    <br>
<p>Example: <code>vero</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-forum--forum_id-">DELETE api/forum/{forum_id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-forum--forum_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://pak_kepo.test/api/forum/13" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/forum/13"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-forum--forum_id-">
</span>
<span id="execution-results-DELETEapi-forum--forum_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-forum--forum_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-forum--forum_id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-forum--forum_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-forum--forum_id-"></code></pre>
</span>
<form id="form-DELETEapi-forum--forum_id-" data-method="DELETE"
      data-path="api/forum/{forum_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-forum--forum_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-forum--forum_id-"
                    onclick="tryItOut('DELETEapi-forum--forum_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-forum--forum_id-"
                    onclick="cancelTryOut('DELETEapi-forum--forum_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-forum--forum_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/forum/{forum_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-forum--forum_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-forum--forum_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>forum_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="forum_id"                data-endpoint="DELETEapi-forum--forum_id-"
               value="13"
               data-component="url">
    <br>
<p>The ID of the forum. Example: <code>13</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-forum_komen--forum_id-">GET api/forum_komen/{forum_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-forum_komen--forum_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/forum_komen/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/forum_komen/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-forum_komen--forum_id-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 50
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Forum] 1&quot;,
    &quot;exception&quot;: &quot;Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException&quot;,
    &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php&quot;,
    &quot;line&quot;: 380,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php&quot;,
            &quot;line&quot;: 356,
            &quot;function&quot;: &quot;prepareException&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Exceptions\\Handler&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\nunomaduro\\collision\\src\\Adapters\\Laravel\\ExceptionHandler.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;render&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Exceptions\\Handler&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php&quot;,
            &quot;line&quot;: 51,
            &quot;function&quot;: &quot;render&quot;,
            &quot;class&quot;: &quot;NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 185,
            &quot;function&quot;: &quot;handleException&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 126,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;handleRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;handleRequestUsingNamedLimiter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 726,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 703,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 667,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 656,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php&quot;,
            &quot;line&quot;: 62,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 142,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 92,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 209,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 166,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 95,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 122,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 69,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 47,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 51,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 651,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 144,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 308,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 126,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 1002,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 171,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-forum_komen--forum_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-forum_komen--forum_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-forum_komen--forum_id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-forum_komen--forum_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-forum_komen--forum_id-"></code></pre>
</span>
<form id="form-GETapi-forum_komen--forum_id-" data-method="GET"
      data-path="api/forum_komen/{forum_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-forum_komen--forum_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-forum_komen--forum_id-"
                    onclick="tryItOut('GETapi-forum_komen--forum_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-forum_komen--forum_id-"
                    onclick="cancelTryOut('GETapi-forum_komen--forum_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-forum_komen--forum_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/forum_komen/{forum_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-forum_komen--forum_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-forum_komen--forum_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>forum_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="forum_id"                data-endpoint="GETapi-forum_komen--forum_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the forum. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-forum_komen--forum_id---forumKomen_id-">GET api/forum_komen/{forum_id}/{forumKomen_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-forum_komen--forum_id---forumKomen_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/forum_komen/18/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/forum_komen/18/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-forum_komen--forum_id---forumKomen_id-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 49
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Forum] 18&quot;,
    &quot;exception&quot;: &quot;Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException&quot;,
    &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php&quot;,
    &quot;line&quot;: 380,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php&quot;,
            &quot;line&quot;: 356,
            &quot;function&quot;: &quot;prepareException&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Exceptions\\Handler&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\nunomaduro\\collision\\src\\Adapters\\Laravel\\ExceptionHandler.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;render&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Exceptions\\Handler&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php&quot;,
            &quot;line&quot;: 51,
            &quot;function&quot;: &quot;render&quot;,
            &quot;class&quot;: &quot;NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 185,
            &quot;function&quot;: &quot;handleException&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 126,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;handleRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;handleRequestUsingNamedLimiter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 726,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 703,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 667,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 656,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php&quot;,
            &quot;line&quot;: 62,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 142,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 92,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 209,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 166,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 95,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 122,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 69,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 47,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 51,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 651,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 144,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 308,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 126,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 1002,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 171,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\pak_kepo\\artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-forum_komen--forum_id---forumKomen_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-forum_komen--forum_id---forumKomen_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-forum_komen--forum_id---forumKomen_id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-forum_komen--forum_id---forumKomen_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-forum_komen--forum_id---forumKomen_id-"></code></pre>
</span>
<form id="form-GETapi-forum_komen--forum_id---forumKomen_id-" data-method="GET"
      data-path="api/forum_komen/{forum_id}/{forumKomen_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-forum_komen--forum_id---forumKomen_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-forum_komen--forum_id---forumKomen_id-"
                    onclick="tryItOut('GETapi-forum_komen--forum_id---forumKomen_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-forum_komen--forum_id---forumKomen_id-"
                    onclick="cancelTryOut('GETapi-forum_komen--forum_id---forumKomen_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-forum_komen--forum_id---forumKomen_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/forum_komen/{forum_id}/{forumKomen_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-forum_komen--forum_id---forumKomen_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-forum_komen--forum_id---forumKomen_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>forum_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="forum_id"                data-endpoint="GETapi-forum_komen--forum_id---forumKomen_id-"
               value="18"
               data-component="url">
    <br>
<p>The ID of the forum. Example: <code>18</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>forumKomen_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="forumKomen_id"                data-endpoint="GETapi-forum_komen--forum_id---forumKomen_id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the forumKomen. Example: <code>2</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-forum_komen--forum_id-">POST api/forum_komen/{forum_id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-forum_komen--forum_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://pak_kepo.test/api/forum_komen/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"komen_forum\": \"et\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/forum_komen/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "komen_forum": "et"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-forum_komen--forum_id-">
</span>
<span id="execution-results-POSTapi-forum_komen--forum_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-forum_komen--forum_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-forum_komen--forum_id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-forum_komen--forum_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-forum_komen--forum_id-"></code></pre>
</span>
<form id="form-POSTapi-forum_komen--forum_id-" data-method="POST"
      data-path="api/forum_komen/{forum_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-forum_komen--forum_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-forum_komen--forum_id-"
                    onclick="tryItOut('POSTapi-forum_komen--forum_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-forum_komen--forum_id-"
                    onclick="cancelTryOut('POSTapi-forum_komen--forum_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-forum_komen--forum_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/forum_komen/{forum_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-forum_komen--forum_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-forum_komen--forum_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>forum_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="forum_id"                data-endpoint="POSTapi-forum_komen--forum_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the forum. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>komen_forum</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="komen_forum"                data-endpoint="POSTapi-forum_komen--forum_id-"
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-forum_komen--forum_id---forumKomen_id-">PATCH api/forum_komen/{forum_id}/{forumKomen_id}</h2>

<p>
</p>



<span id="example-requests-PATCHapi-forum_komen--forum_id---forumKomen_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://pak_kepo.test/api/forum_komen/8/13" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"komen_forum\": \"voluptas\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/forum_komen/8/13"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "komen_forum": "voluptas"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-forum_komen--forum_id---forumKomen_id-">
</span>
<span id="execution-results-PATCHapi-forum_komen--forum_id---forumKomen_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-forum_komen--forum_id---forumKomen_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-forum_komen--forum_id---forumKomen_id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-forum_komen--forum_id---forumKomen_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-forum_komen--forum_id---forumKomen_id-"></code></pre>
</span>
<form id="form-PATCHapi-forum_komen--forum_id---forumKomen_id-" data-method="PATCH"
      data-path="api/forum_komen/{forum_id}/{forumKomen_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-forum_komen--forum_id---forumKomen_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-forum_komen--forum_id---forumKomen_id-"
                    onclick="tryItOut('PATCHapi-forum_komen--forum_id---forumKomen_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-forum_komen--forum_id---forumKomen_id-"
                    onclick="cancelTryOut('PATCHapi-forum_komen--forum_id---forumKomen_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-forum_komen--forum_id---forumKomen_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/forum_komen/{forum_id}/{forumKomen_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PATCHapi-forum_komen--forum_id---forumKomen_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PATCHapi-forum_komen--forum_id---forumKomen_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>forum_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="forum_id"                data-endpoint="PATCHapi-forum_komen--forum_id---forumKomen_id-"
               value="8"
               data-component="url">
    <br>
<p>The ID of the forum. Example: <code>8</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>forumKomen_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="forumKomen_id"                data-endpoint="PATCHapi-forum_komen--forum_id---forumKomen_id-"
               value="13"
               data-component="url">
    <br>
<p>The ID of the forumKomen. Example: <code>13</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>komen_forum</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="komen_forum"                data-endpoint="PATCHapi-forum_komen--forum_id---forumKomen_id-"
               value="voluptas"
               data-component="body">
    <br>
<p>Example: <code>voluptas</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-forum_komen--forumKomen_id-">DELETE api/forum_komen/{forumKomen_id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-forum_komen--forumKomen_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://pak_kepo.test/api/forum_komen/19" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/forum_komen/19"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-forum_komen--forumKomen_id-">
</span>
<span id="execution-results-DELETEapi-forum_komen--forumKomen_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-forum_komen--forumKomen_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-forum_komen--forumKomen_id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-forum_komen--forumKomen_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-forum_komen--forumKomen_id-"></code></pre>
</span>
<form id="form-DELETEapi-forum_komen--forumKomen_id-" data-method="DELETE"
      data-path="api/forum_komen/{forumKomen_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-forum_komen--forumKomen_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-forum_komen--forumKomen_id-"
                    onclick="tryItOut('DELETEapi-forum_komen--forumKomen_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-forum_komen--forumKomen_id-"
                    onclick="cancelTryOut('DELETEapi-forum_komen--forumKomen_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-forum_komen--forumKomen_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/forum_komen/{forumKomen_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-forum_komen--forumKomen_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-forum_komen--forumKomen_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>forumKomen_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="forumKomen_id"                data-endpoint="DELETEapi-forum_komen--forumKomen_id-"
               value="19"
               data-component="url">
    <br>
<p>The ID of the forumKomen. Example: <code>19</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-post-category-headline">Show all POST on headline</h2>

<p>
</p>

<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.
authenticated: false</p>

<span id="example-requests-GETapi-post-category-headline">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://pak_kepo.test/api/post/category/headline" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://pak_kepo.test/api/post/category/headline"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-category-headline">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-category-headline" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-category-headline"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-category-headline" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-post-category-headline" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-category-headline"></code></pre>
</span>
<form id="form-GETapi-post-category-headline" data-method="GET"
      data-path="api/post/category/headline"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-category-headline', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-category-headline"
                    onclick="tryItOut('GETapi-post-category-headline');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-category-headline"
                    onclick="cancelTryOut('GETapi-post-category-headline');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-category-headline" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/category/headline</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-post-category-headline"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-post-category-headline"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
