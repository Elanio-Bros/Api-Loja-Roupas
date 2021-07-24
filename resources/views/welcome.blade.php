<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../docs/css/theme-default.style.css" media="screen">
    <link rel="stylesheet" href="../docs/css/theme-default.print.css" media="print">
    <script src="../docs/js/theme-default-3.7.0.js"></script>

    <link rel="stylesheet" href="//unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="//unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>
    <script>
        hljs.highlightAll();
    </script>

    <script src="//cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
    <script>
        var baseUrl = "http://localhost";
    </script>
    <script src="../docs/js/tryitout-3.7.0.js"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
    <a href="#" id="nav-button">
        <span>
            MENU
            <img src="../docs/images/navbar.png" alt="navbar-image" />
        </span>
    </a>
    <div class="tocify-wrapper">
        <div class="lang-selector">
            <a href="#" data-language-name="bash">bash</a>
            <a href="#" data-language-name="javascript">javascript</a>
        </div>
        <div class="search">
            <input type="text" class="search" id="input-search" placeholder="Search">
        </div>
        <ul class="search-results"></ul>

        <ul id="toc">
        </ul>

        <ul class="toc-footer" id="toc-footer">
            <li><a href="../docs/collection.json">View Postman collection</a></li>
            <li><a href="../docs/openapi.yaml">View OpenAPI spec</a></li>
            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
        </ul>
        <ul class="toc-footer" id="last-updated">
            <li>Last updated: July 24 2021</li>
        </ul>
    </div>
    <div class="page-wrapper">
        <div class="dark-box"></div>
        <div class="content">
            <h1>Introduction</h1>
            <p>This documentation aims to provide all the information you need to work with our API.</p>
            <aside>As you scroll, you'll see code examples for working with the API in different programming languages
                in the dark area to the right (or as part of the content on mobile).
                You can switch the language used with the tabs at the top right (or from the nav menu at the top left on
                mobile).</aside>
            <blockquote>
                <p>Base URL</p>
            </blockquote>
            <pre><code class="language-yaml">http://localhost</code></pre>

            <h1>Authenticating requests</h1>
            <p>This API is not authenticated.</p>

            <h1 id="endpoints">Endpoints</h1>



            <h2 id="endpoints-GETapi-usuarios">GET api/usuarios</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-usuarios">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/usuarios" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/usuarios"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-GETapi-usuarios">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary>
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json">&quot;Invalid Token&quot;</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-usuarios" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-usuarios"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-usuarios"></code></pre>
            </span>
            <span id="execution-error-GETapi-usuarios" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-usuarios"></code></pre>
            </span>
            <form id="form-GETapi-usuarios" data-method="GET" data-path="api/usuarios" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
                autocomplete="off" onsubmit="event.preventDefault(); executeTryOut('GETapi-usuarios', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-usuarios" onclick="tryItOut('GETapi-usuarios');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-usuarios" onclick="cancelTryOut('GETapi-usuarios');" hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-usuarios" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/usuarios</code></b>
                </p>
            </form>

            <h2 id="endpoints-GETapi-usuarioToken">GET api/usuarioToken</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-usuarioToken">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/usuarioToken" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/usuarioToken"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-GETapi-usuarioToken">
                <blockquote>
                    <p>Example response (422):</p>
                </blockquote>
                <details class="annotation">
                    <summary>
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;The email field is required.&quot;
        ],
        &quot;senha&quot;: [
            &quot;The senha field is required.&quot;
        ]
    }
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-usuarioToken" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-usuarioToken"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-usuarioToken"></code></pre>
            </span>
            <span id="execution-error-GETapi-usuarioToken" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-usuarioToken"></code></pre>
            </span>
            <form id="form-GETapi-usuarioToken" data-method="GET" data-path="api/usuarioToken" data-authed="0"
                data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-usuarioToken', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-usuarioToken" onclick="tryItOut('GETapi-usuarioToken');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-usuarioToken" onclick="cancelTryOut('GETapi-usuarioToken');"
                        hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-usuarioToken" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/usuarioToken</code></b>
                </p>
            </form>

            <h2 id="endpoints-POSTapi-criarUsuario">POST api/criarUsuario</h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-criarUsuario">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/criarUsuario" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nome\": \"occaecati\",
    \"senha\": \"quibusdam\",
    \"email\": \"jaskolski.jaclyn@example.org\"
}"
</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/criarUsuario"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nome": "occaecati",
    "senha": "quibusdam",
    "email": "jaskolski.jaclyn@example.org"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-POSTapi-criarUsuario">
            </span>
            <span id="execution-results-POSTapi-criarUsuario" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-criarUsuario"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-criarUsuario"></code></pre>
            </span>
            <span id="execution-error-POSTapi-criarUsuario" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-criarUsuario"></code></pre>
            </span>
            <form id="form-POSTapi-criarUsuario" data-method="POST" data-path="api/criarUsuario" data-authed="0"
                data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-criarUsuario', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-criarUsuario" onclick="tryItOut('POSTapi-criarUsuario');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-criarUsuario" onclick="cancelTryOut('POSTapi-criarUsuario');"
                        hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-criarUsuario" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/criarUsuario</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <p>
                    <b><code>nome</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                </p>
                <p>
                    <b><code>senha</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="senha" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                </p>
                <p>
                    <b><code>email</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="email" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                <p>Must be a valid email address.</p>
                </p>

            </form>

            <h2 id="endpoints-DELETEapi-Usuario-delete">DELETE api/Usuario/delete</h2>

            <p>
            </p>



            <span id="example-requests-DELETEapi-Usuario-delete">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/Usuario/delete" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/Usuario/delete"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-DELETEapi-Usuario-delete">
            </span>
            <span id="execution-results-DELETEapi-Usuario-delete" hidden>
                <blockquote>Received response<span id="execution-response-status-DELETEapi-Usuario-delete"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-DELETEapi-Usuario-delete"></code></pre>
            </span>
            <span id="execution-error-DELETEapi-Usuario-delete" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-DELETEapi-Usuario-delete"></code></pre>
            </span>
            <form id="form-DELETEapi-Usuario-delete" data-method="DELETE" data-path="api/Usuario/delete" data-authed="0"
                data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEapi-Usuario-delete', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEapi-Usuario-delete" onclick="tryItOut('DELETEapi-Usuario-delete');">Try it
                        out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEapi-Usuario-delete"
                        onclick="cancelTryOut('DELETEapi-Usuario-delete');" hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEapi-Usuario-delete" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>api/Usuario/delete</code></b>
                </p>
            </form>

            <h2 id="endpoints-DELETEapi-Usuario-delete--id-">DELETE api/Usuario/delete/{id}</h2>

            <p>
            </p>



            <span id="example-requests-DELETEapi-Usuario-delete--id-">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/Usuario/delete/ea" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/Usuario/delete/ea"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-DELETEapi-Usuario-delete--id-">
            </span>
            <span id="execution-results-DELETEapi-Usuario-delete--id-" hidden>
                <blockquote>Received response<span id="execution-response-status-DELETEapi-Usuario-delete--id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-DELETEapi-Usuario-delete--id-"></code></pre>
            </span>
            <span id="execution-error-DELETEapi-Usuario-delete--id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-DELETEapi-Usuario-delete--id-"></code></pre>
            </span>
            <form id="form-DELETEapi-Usuario-delete--id-" data-method="DELETE" data-path="api/Usuario/delete/{id}"
                data-authed="0" data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEapi-Usuario-delete--id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEapi-Usuario-delete--id-"
                        onclick="tryItOut('DELETEapi-Usuario-delete--id-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEapi-Usuario-delete--id-"
                        onclick="cancelTryOut('DELETEapi-Usuario-delete--id-');" hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEapi-Usuario-delete--id-" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>api/Usuario/delete/{id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <p>
                    <b><code>id</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="id" data-endpoint="DELETEapi-Usuario-delete--id-" data-component="url"
                        required hidden>
                    <br>
                <p>The ID of the delete.</p>
                </p>
            </form>

            <h2 id="endpoints-PUTapi-usuarios--idUser-">PUT api/usuarios/{idUser}</h2>

            <p>
            </p>



            <span id="example-requests-PUTapi-usuarios--idUser-">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/usuarios/inventore" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/usuarios/inventore"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-PUTapi-usuarios--idUser-">
            </span>
            <span id="execution-results-PUTapi-usuarios--idUser-" hidden>
                <blockquote>Received response<span id="execution-response-status-PUTapi-usuarios--idUser-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-PUTapi-usuarios--idUser-"></code></pre>
            </span>
            <span id="execution-error-PUTapi-usuarios--idUser-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-PUTapi-usuarios--idUser-"></code></pre>
            </span>
            <form id="form-PUTapi-usuarios--idUser-" data-method="PUT" data-path="api/usuarios/{idUser}" data-authed="0"
                data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('PUTapi-usuarios--idUser-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PUTapi-usuarios--idUser-" onclick="tryItOut('PUTapi-usuarios--idUser-');">Try it
                        out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PUTapi-usuarios--idUser-"
                        onclick="cancelTryOut('PUTapi-usuarios--idUser-');" hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PUTapi-usuarios--idUser-" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-darkblue">PUT</small>
                    <b><code>api/usuarios/{idUser}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <p>
                    <b><code>idUser</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="idUser" data-endpoint="PUTapi-usuarios--idUser-" data-component="url"
                        required hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-PATCHapi-usuarios--idUser-">PATCH api/usuarios/{idUser}</h2>

            <p>
            </p>



            <span id="example-requests-PATCHapi-usuarios--idUser-">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/usuarios/voluptatem" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/usuarios/voluptatem"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-PATCHapi-usuarios--idUser-">
            </span>
            <span id="execution-results-PATCHapi-usuarios--idUser-" hidden>
                <blockquote>Received response<span id="execution-response-status-PATCHapi-usuarios--idUser-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-PATCHapi-usuarios--idUser-"></code></pre>
            </span>
            <span id="execution-error-PATCHapi-usuarios--idUser-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-PATCHapi-usuarios--idUser-"></code></pre>
            </span>
            <form id="form-PATCHapi-usuarios--idUser-" data-method="PATCH" data-path="api/usuarios/{idUser}"
                data-authed="0" data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('PATCHapi-usuarios--idUser-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PATCHapi-usuarios--idUser-" onclick="tryItOut('PATCHapi-usuarios--idUser-');">Try
                        it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PATCHapi-usuarios--idUser-"
                        onclick="cancelTryOut('PATCHapi-usuarios--idUser-');" hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PATCHapi-usuarios--idUser-" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-purple">PATCH</small>
                    <b><code>api/usuarios/{idUser}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <p>
                    <b><code>idUser</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="idUser" data-endpoint="PATCHapi-usuarios--idUser-" data-component="url"
                        required hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-GETapi-historico">GET api/historico</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-historico">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/historico" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/historico"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-GETapi-historico">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary>
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json">&quot;Invalid Token&quot;</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-historico" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-historico"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-historico"></code></pre>
            </span>
            <span id="execution-error-GETapi-historico" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-historico"></code></pre>
            </span>
            <form id="form-GETapi-historico" data-method="GET" data-path="api/historico" data-authed="0"
                data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-historico', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-historico" onclick="tryItOut('GETapi-historico');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-historico" onclick="cancelTryOut('GETapi-historico');" hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-historico" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/historico</code></b>
                </p>
            </form>

            <h2 id="endpoints-GETapi-historico-all">GET api/historico/all</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-historico-all">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/historico/all" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/historico/all"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-GETapi-historico-all">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary>
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json">&quot;Invalid Token&quot;</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-historico-all" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-historico-all"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-historico-all"></code></pre>
            </span>
            <span id="execution-error-GETapi-historico-all" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-historico-all"></code></pre>
            </span>
            <form id="form-GETapi-historico-all" data-method="GET" data-path="api/historico/all" data-authed="0"
                data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-historico-all', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-historico-all" onclick="tryItOut('GETapi-historico-all');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-historico-all" onclick="cancelTryOut('GETapi-historico-all');"
                        hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-historico-all" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/historico/all</code></b>
                </p>
            </form>

            <h2 id="endpoints-GETapi-produtos-all">GET api/produtos/all</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-produtos-all">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/produtos/all" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/produtos/all"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-GETapi-produtos-all">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary>
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json">&quot;Invalid Token&quot;</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-produtos-all" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-produtos-all"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-produtos-all"></code></pre>
            </span>
            <span id="execution-error-GETapi-produtos-all" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-produtos-all"></code></pre>
            </span>
            <form id="form-GETapi-produtos-all" data-method="GET" data-path="api/produtos/all" data-authed="0"
                data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-produtos-all', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-produtos-all" onclick="tryItOut('GETapi-produtos-all');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-produtos-all" onclick="cancelTryOut('GETapi-produtos-all');"
                        hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-produtos-all" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/produtos/all</code></b>
                </p>
            </form>

            <h2 id="endpoints-GETapi-produtos">GET api/produtos</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-produtos">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/produtos" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/produtos"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-GETapi-produtos">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary>
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre>
                </details>
                <pre>

<code class="language-json">&quot;Invalid Token&quot;</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-produtos" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-produtos"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-produtos"></code></pre>
            </span>
            <span id="execution-error-GETapi-produtos" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-produtos"></code></pre>
            </span>
            <form id="form-GETapi-produtos" data-method="GET" data-path="api/produtos" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
                autocomplete="off" onsubmit="event.preventDefault(); executeTryOut('GETapi-produtos', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-produtos" onclick="tryItOut('GETapi-produtos');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-produtos" onclick="cancelTryOut('GETapi-produtos');" hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-produtos" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/produtos</code></b>
                </p>
            </form>

            <h2 id="endpoints-POSTapi-produto-create">POST api/produto/create</h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-produto-create">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/produto/create" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/produto/create"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-POSTapi-produto-create">
            </span>
            <span id="execution-results-POSTapi-produto-create" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-produto-create"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-produto-create"></code></pre>
            </span>
            <span id="execution-error-POSTapi-produto-create" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-produto-create"></code></pre>
            </span>
            <form id="form-POSTapi-produto-create" data-method="POST" data-path="api/produto/create" data-authed="0"
                data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-produto-create', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-produto-create" onclick="tryItOut('POSTapi-produto-create');">Try it out
                        ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-produto-create" onclick="cancelTryOut('POSTapi-produto-create');"
                        hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-produto-create" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/produto/create</code></b>
                </p>
            </form>

            <h2 id="endpoints-POSTapi-fotos-upload--idProduto-">POST api/fotos/upload/{idProduto}</h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-fotos-upload--idProduto-">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/fotos/upload/voluptatem" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/fotos/upload/voluptatem"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-POSTapi-fotos-upload--idProduto-">
            </span>
            <span id="execution-results-POSTapi-fotos-upload--idProduto-" hidden>
                <blockquote>Received response<span
                        id="execution-response-status-POSTapi-fotos-upload--idProduto-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-fotos-upload--idProduto-"></code></pre>
            </span>
            <span id="execution-error-POSTapi-fotos-upload--idProduto-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-fotos-upload--idProduto-"></code></pre>
            </span>
            <form id="form-POSTapi-fotos-upload--idProduto-" data-method="POST" data-path="api/fotos/upload/{idProduto}"
                data-authed="0" data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-fotos-upload--idProduto-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-fotos-upload--idProduto-"
                        onclick="tryItOut('POSTapi-fotos-upload--idProduto-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-fotos-upload--idProduto-"
                        onclick="cancelTryOut('POSTapi-fotos-upload--idProduto-');" hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-fotos-upload--idProduto-" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/fotos/upload/{idProduto}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <p>
                    <b><code>idProduto</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="idProduto" data-endpoint="POSTapi-fotos-upload--idProduto-"
                        data-component="url" required hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-POSTapi-fotos-update-all--idProduto-">POST api/fotos/update/all/{idProduto}</h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-fotos-update-all--idProduto-">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/fotos/update/all/pariatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/fotos/update/all/pariatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-POSTapi-fotos-update-all--idProduto-">
            </span>
            <span id="execution-results-POSTapi-fotos-update-all--idProduto-" hidden>
                <blockquote>Received response<span
                        id="execution-response-status-POSTapi-fotos-update-all--idProduto-"></span>:
                </blockquote>
                <pre
                    class="json"><code id="execution-response-content-POSTapi-fotos-update-all--idProduto-"></code></pre>
            </span>
            <span id="execution-error-POSTapi-fotos-update-all--idProduto-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-fotos-update-all--idProduto-"></code></pre>
            </span>
            <form id="form-POSTapi-fotos-update-all--idProduto-" data-method="POST"
                data-path="api/fotos/update/all/{idProduto}" data-authed="0" data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-fotos-update-all--idProduto-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-fotos-update-all--idProduto-"
                        onclick="tryItOut('POSTapi-fotos-update-all--idProduto-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-fotos-update-all--idProduto-"
                        onclick="cancelTryOut('POSTapi-fotos-update-all--idProduto-');" hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-fotos-update-all--idProduto-" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/fotos/update/all/{idProduto}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <p>
                    <b><code>idProduto</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="idProduto" data-endpoint="POSTapi-fotos-update-all--idProduto-"
                        data-component="url" required hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-POSTapi-fotos-update--idProduto---idImagem-">POST api/fotos/update/{idProduto}/{idImagem}
            </h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-fotos-update--idProduto---idImagem-">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/fotos/update/atque/est" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/fotos/update/atque/est"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-POSTapi-fotos-update--idProduto---idImagem-">
            </span>
            <span id="execution-results-POSTapi-fotos-update--idProduto---idImagem-" hidden>
                <blockquote>Received response<span
                        id="execution-response-status-POSTapi-fotos-update--idProduto---idImagem-"></span>:
                </blockquote>
                <pre
                    class="json"><code id="execution-response-content-POSTapi-fotos-update--idProduto---idImagem-"></code></pre>
            </span>
            <span id="execution-error-POSTapi-fotos-update--idProduto---idImagem-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-fotos-update--idProduto---idImagem-"></code></pre>
            </span>
            <form id="form-POSTapi-fotos-update--idProduto---idImagem-" data-method="POST"
                data-path="api/fotos/update/{idProduto}/{idImagem}" data-authed="0" data-hasfiles="0"
                data-isarraybody="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
                autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-fotos-update--idProduto---idImagem-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-fotos-update--idProduto---idImagem-"
                        onclick="tryItOut('POSTapi-fotos-update--idProduto---idImagem-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-fotos-update--idProduto---idImagem-"
                        onclick="cancelTryOut('POSTapi-fotos-update--idProduto---idImagem-');" hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-fotos-update--idProduto---idImagem-" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/fotos/update/{idProduto}/{idImagem}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <p>
                    <b><code>idProduto</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="idProduto" data-endpoint="POSTapi-fotos-update--idProduto---idImagem-"
                        data-component="url" required hidden>
                    <br>
                </p>
                <p>
                    <b><code>idImagem</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="idImagem" data-endpoint="POSTapi-fotos-update--idProduto---idImagem-"
                        data-component="url" required hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-PUTapi-produtos--idProduto-">PUT api/produtos/{idProduto}</h2>

            <p>
            </p>



            <span id="example-requests-PUTapi-produtos--idProduto-">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/produtos/doloremque" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/produtos/doloremque"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-PUTapi-produtos--idProduto-">
            </span>
            <span id="execution-results-PUTapi-produtos--idProduto-" hidden>
                <blockquote>Received response<span id="execution-response-status-PUTapi-produtos--idProduto-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-PUTapi-produtos--idProduto-"></code></pre>
            </span>
            <span id="execution-error-PUTapi-produtos--idProduto-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-PUTapi-produtos--idProduto-"></code></pre>
            </span>
            <form id="form-PUTapi-produtos--idProduto-" data-method="PUT" data-path="api/produtos/{idProduto}"
                data-authed="0" data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('PUTapi-produtos--idProduto-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PUTapi-produtos--idProduto-"
                        onclick="tryItOut('PUTapi-produtos--idProduto-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PUTapi-produtos--idProduto-"
                        onclick="cancelTryOut('PUTapi-produtos--idProduto-');" hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PUTapi-produtos--idProduto-" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-darkblue">PUT</small>
                    <b><code>api/produtos/{idProduto}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <p>
                    <b><code>idProduto</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="idProduto" data-endpoint="PUTapi-produtos--idProduto-" data-component="url"
                        required hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-PATCHapi-produtos--idProduto-">PATCH api/produtos/{idProduto}</h2>

            <p>
            </p>



            <span id="example-requests-PATCHapi-produtos--idProduto-">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/produtos/optio" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/produtos/optio"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-PATCHapi-produtos--idProduto-">
            </span>
            <span id="execution-results-PATCHapi-produtos--idProduto-" hidden>
                <blockquote>Received response<span id="execution-response-status-PATCHapi-produtos--idProduto-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-PATCHapi-produtos--idProduto-"></code></pre>
            </span>
            <span id="execution-error-PATCHapi-produtos--idProduto-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-PATCHapi-produtos--idProduto-"></code></pre>
            </span>
            <form id="form-PATCHapi-produtos--idProduto-" data-method="PATCH" data-path="api/produtos/{idProduto}"
                data-authed="0" data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('PATCHapi-produtos--idProduto-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-PATCHapi-produtos--idProduto-"
                        onclick="tryItOut('PATCHapi-produtos--idProduto-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-PATCHapi-produtos--idProduto-"
                        onclick="cancelTryOut('PATCHapi-produtos--idProduto-');" hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-PATCHapi-produtos--idProduto-" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-purple">PATCH</small>
                    <b><code>api/produtos/{idProduto}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <p>
                    <b><code>idProduto</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="idProduto" data-endpoint="PATCHapi-produtos--idProduto-"
                        data-component="url" required hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-DELETEapi-produtos-delete--idProduto-">DELETE api/produtos/delete/{idProduto}</h2>

            <p>
            </p>



            <span id="example-requests-DELETEapi-produtos-delete--idProduto-">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/produtos/delete/corrupti" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/produtos/delete/corrupti"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-DELETEapi-produtos-delete--idProduto-">
            </span>
            <span id="execution-results-DELETEapi-produtos-delete--idProduto-" hidden>
                <blockquote>Received response<span
                        id="execution-response-status-DELETEapi-produtos-delete--idProduto-"></span>:
                </blockquote>
                <pre
                    class="json"><code id="execution-response-content-DELETEapi-produtos-delete--idProduto-"></code></pre>
            </span>
            <span id="execution-error-DELETEapi-produtos-delete--idProduto-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-DELETEapi-produtos-delete--idProduto-"></code></pre>
            </span>
            <form id="form-DELETEapi-produtos-delete--idProduto-" data-method="DELETE"
                data-path="api/produtos/delete/{idProduto}" data-authed="0" data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEapi-produtos-delete--idProduto-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEapi-produtos-delete--idProduto-"
                        onclick="tryItOut('DELETEapi-produtos-delete--idProduto-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEapi-produtos-delete--idProduto-"
                        onclick="cancelTryOut('DELETEapi-produtos-delete--idProduto-');" hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEapi-produtos-delete--idProduto-" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>api/produtos/delete/{idProduto}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <p>
                    <b><code>idProduto</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="idProduto" data-endpoint="DELETEapi-produtos-delete--idProduto-"
                        data-component="url" required hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-DELETEapi-foto-delete-all--idProduto-">DELETE api/foto/delete/all/{idProduto}</h2>

            <p>
            </p>



            <span id="example-requests-DELETEapi-foto-delete-all--idProduto-">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/foto/delete/all/quaerat" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/foto/delete/all/quaerat"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-DELETEapi-foto-delete-all--idProduto-">
            </span>
            <span id="execution-results-DELETEapi-foto-delete-all--idProduto-" hidden>
                <blockquote>Received response<span
                        id="execution-response-status-DELETEapi-foto-delete-all--idProduto-"></span>:
                </blockquote>
                <pre
                    class="json"><code id="execution-response-content-DELETEapi-foto-delete-all--idProduto-"></code></pre>
            </span>
            <span id="execution-error-DELETEapi-foto-delete-all--idProduto-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-DELETEapi-foto-delete-all--idProduto-"></code></pre>
            </span>
            <form id="form-DELETEapi-foto-delete-all--idProduto-" data-method="DELETE"
                data-path="api/foto/delete/all/{idProduto}" data-authed="0" data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEapi-foto-delete-all--idProduto-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEapi-foto-delete-all--idProduto-"
                        onclick="tryItOut('DELETEapi-foto-delete-all--idProduto-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEapi-foto-delete-all--idProduto-"
                        onclick="cancelTryOut('DELETEapi-foto-delete-all--idProduto-');" hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEapi-foto-delete-all--idProduto-" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>api/foto/delete/all/{idProduto}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <p>
                    <b><code>idProduto</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="idProduto" data-endpoint="DELETEapi-foto-delete-all--idProduto-"
                        data-component="url" required hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-DELETEapi-foto-delete--idProduto---idFoto-">DELETE api/foto/delete/{idProduto}/{idFoto}
            </h2>

            <p>
            </p>



            <span id="example-requests-DELETEapi-foto-delete--idProduto---idFoto-">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/foto/delete/et/qui" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

                <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/foto/delete/et/qui"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-DELETEapi-foto-delete--idProduto---idFoto-">
            </span>
            <span id="execution-results-DELETEapi-foto-delete--idProduto---idFoto-" hidden>
                <blockquote>Received response<span
                        id="execution-response-status-DELETEapi-foto-delete--idProduto---idFoto-"></span>:
                </blockquote>
                <pre
                    class="json"><code id="execution-response-content-DELETEapi-foto-delete--idProduto---idFoto-"></code></pre>
            </span>
            <span id="execution-error-DELETEapi-foto-delete--idProduto---idFoto-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-DELETEapi-foto-delete--idProduto---idFoto-"></code></pre>
            </span>
            <form id="form-DELETEapi-foto-delete--idProduto---idFoto-" data-method="DELETE"
                data-path="api/foto/delete/{idProduto}/{idFoto}" data-authed="0" data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEapi-foto-delete--idProduto---idFoto-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-DELETEapi-foto-delete--idProduto---idFoto-"
                        onclick="tryItOut('DELETEapi-foto-delete--idProduto---idFoto-');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-DELETEapi-foto-delete--idProduto---idFoto-"
                        onclick="cancelTryOut('DELETEapi-foto-delete--idProduto---idFoto-');" hidden>Cancel
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-DELETEapi-foto-delete--idProduto---idFoto-" hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>api/foto/delete/{idProduto}/{idFoto}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <p>
                    <b><code>idProduto</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="idProduto" data-endpoint="DELETEapi-foto-delete--idProduto---idFoto-"
                        data-component="url" required hidden>
                    <br>
                </p>
                <p>
                    <b><code>idFoto</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="idFoto" data-endpoint="DELETEapi-foto-delete--idProduto---idFoto-"
                        data-component="url" required hidden>
                    <br>
                </p>
            </form>




        </div>
        <div class="dark-box">
            <div class="lang-selector">
                <a href="#" data-language-name="bash">bash</a>
                <a href="#" data-language-name="javascript">javascript</a>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            var exampleLanguages = ["bash", "javascript"];
            setupLanguages(exampleLanguages);
        });
    </script>
</body>

</html>
