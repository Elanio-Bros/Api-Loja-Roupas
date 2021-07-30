<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Api Vesti</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../docs/css/theme-default.style.css" media="screen">
    <link rel="stylesheet" href="../docs/css/theme-default.print.css" media="print">
    <script src="../docs/js/theme-default-3.7.0.js"></script>

    <link rel="stylesheet" href="//unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="//unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>
    <script>
        hljs.highlightAll();
    </script>


</head>

<body data-languages="[&quot;javascript&quot;]">
    <a href="#" id="nav-button">
        <span>
            MENU
            <img src="../docs/images/navbar.png" alt="navbar-image" />
        </span>
    </a>
    <div class="tocify-wrapper">
        <div class="lang-selector">
            <a href="#" data-language-name="javascript">javascript</a>
        </div>
        <div class="search">
            <input type="text" class="search" id="input-search" placeholder="Search">
        </div>
        <ul class="search-results"></ul>

        <ul id="toc">
        </ul>

        <ul class="toc-footer" id="toc-footer">
            {{-- <li><a href="../docs/collection.json">View Postman collection</a></li> ajustar depois --}}
            {{-- <li><a href="../docs/openapi.yaml">View OpenAPI spec</a></li> ajustar depois --}}
            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
        </ul>
        <ul class="toc-footer" id="last-updated">
            <li>Last updated: July 26 2021</li>
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
            <pre><code class="language-yaml"><p>{{ Request::url() }}</p></code></pre>

            <h1>Authentication</h1>
            <p>Some endpoints will need to use the generated user's token, and it must always be sent by the request
                header</p>

            <h1 id="endpoints">Endpoints</h1>



            <h2 id="endpoints-DELETEapi-usuario-delete">DELETE api/usuario/delete</h2>

            <p>
            </p>



            <span id="example-requests-DELETEapi-usuario-delete">
                <blockquote>Example request:</blockquote>

                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/usuario/delete"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "token": "api_token",
};

const body{
    'email':sam@email.com
}

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-DELETEapi-usuario-delete">
            </span>
            <span id="execution-results-DELETEapi-usuario-delete" hidden>
                <blockquote>Received response<span id="execution-response-status-DELETEapi-usuario-delete"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-DELETEapi-usuario-delete"></code></pre>
            </span>
            <span id="execution-error-DELETEapi-usuario-delete" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-DELETEapi-usuario-delete"></code></pre>
            </span>
            <form id="form-DELETEapi-usuario-delete" data-method="DELETE" data-path="api/usuario/delete" data-authed="0"
                data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off" onsubmit="event.preventDefault(); executeTryOut('DELETEapi-usuario-delete', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>api/usuario/delete</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Body Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>email</code></b>&nbsp;&nbsp;<small>email</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-DELETEapi-usuario-delete--id-">DELETE api/usuario/delete/{id}</h2>

            <p>
            </p>



            <span id="example-requests-DELETEapi-usuario-delete--id-">
                <blockquote>Example request:</blockquote>

                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/usuario/delete/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "token": "api_token",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-DELETEapi-usuario-delete--id-">
            </span>
            <span id="execution-results-DELETEapi-usuario-delete--id-" hidden>
                <blockquote>Received response<span id="execution-response-status-DELETEapi-usuario-delete--id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-DELETEapi-usuario-delete--id-"></code></pre>
            </span>
            <span id="execution-error-DELETEapi-usuario-delete--id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-DELETEapi-usuario-delete--id-"></code></pre>
            </span>
            <form id="form-DELETEapi-usuario-delete--id-" data-method="DELETE" data-path="api/usuario/delete/{id}"
                data-authed="0" data-hasfiles="0" data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEapi-usuario-delete--id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>api/usuario/delete/{id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>id</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                    <input type="text" name="id" data-endpoint="DELETEapi-usuario-delete--id-" data-component="url"
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


                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/usuarios/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "token": "api_token",
};

let body = {
    "nome":"Sam",
    "senha": "passw",
    "email": "sam@email.com"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
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
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off" onsubmit="event.preventDefault(); executeTryOut('PUTapi-usuarios--idUser-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-darkblue">PUT</small>
                    <b><code>api/usuarios/{idUser}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>idUser</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                    <input type="text" name="idUser" data-endpoint="PUTapi-usuarios--idUser-" data-component="url"
                        required hidden>
                    <br>
                </p>
                <h4 class="fancy-heading-panel"><b>Body Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>nome</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="PUTapi-usuarios--idUser-" data-component="body"
                        required hidden>
                    <br>
                </p>
                <p>
                    <b><code>senha</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="senha" data-endpoint="PUTapi-usuarios--idUser-" data-component="body"
                        required hidden>
                    <br>
                </p>
                <p>
                    <b><code>email</code></b>&nbsp;&nbsp;<small>email</small> &nbsp;
                    <input type="text" name="email" data-endpoint="PUTapi-usuarios--idUser-" data-component="body"
                        required hidden>
                    <br>
                <p>Must be a valid email address.</p>
                </p>

            </form>

            <h2 id="endpoints-PATCHapi-usuarios--idUser-">PATCH api/usuarios/{idUser}</h2>

            <p>
            </p>



            <span id="example-requests-PATCHapi-usuarios--idUser-">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/usuarios/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "token": "api_token",
};

let body = {
    "senha":pass,
}

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
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('PATCHapi-usuarios--idUser-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-purple">PATCH</small>
                    <b><code>api/usuarios/{idUser}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>idUser</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                    <input type="text" name="idUser" data-endpoint="PATCHapi-usuarios--idUser-" data-component="url"
                        required hidden>
                    <br>
                </p>
                <h4 class="fancy-heading-panel"><b>Body Parameters <i style="color: #C9B624">(one required)</i></b></h4>
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
            </form>

            <h2 id="endpoints-GETapi-usuarios">GET api/usuarios</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-usuarios">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/usuarios"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "token": "api_token",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-GETapi-usuarios">
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
                data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off" onsubmit="event.preventDefault(); executeTryOut('GETapi-usuarios', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/usuarios</code></b>
                </p>
            </form>

            <h2 id="endpoints-GETapi-historico">GET api/historico</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-historico">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/historico"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "token": "api_token",
};

let body{
    'codigo_produto':1
}

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-GETapi-historico">
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
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off" onsubmit="event.preventDefault(); executeTryOut('GETapi-historico', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/historico</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Body Parameters <i style="color: red">(not required)</i></b></h4>
                <p>
                    <b><code>codigo_produto</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-GETapi-produtos">GET api/produtos</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-produtos">
                <blockquote>Example request:</blockquote>

                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/produtos"
);

const url = new URL(
    "{{ Request::url() }}/api/produtos?categoria=Camisa"
);
const url = new URL(
    "{{ Request::url() }}/api/produtos?categoria=Camisa&tamanho=M"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "token": "api_token",
};



fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
            </span>

            <span id="example-responses-GETapi-produtos">
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
                data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off" onsubmit="event.preventDefault(); executeTryOut('GETapi-produtos', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/produtos</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Url Parameters <i style="color: #C9B624">(one required)</i></b></h4>
                <p>
                    <b><code>codigo_produto</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>categorio</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>nome</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>preço</code></b>&nbsp;&nbsp;<small>float</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>confecção</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>tamanho</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>quantidade_produtos</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-POSTapi-produto-create">POST api/produto/create</h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-produto-create">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/produto/create"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "token": "api_token",
};
let body= {
    "categorio":Camisa
    "nome":Camisa Polo
    "preço":25.00
    "confecção":Malha 
    "tamanho":M  
    "quantidade_produtos":10 
}

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
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off" onsubmit="event.preventDefault(); executeTryOut('POSTapi-produto-create', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/produto/create</code></b>
                <h4 class="fancy-heading-panel"><b>Body Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>categorio</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>nome</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>preço</code></b>&nbsp;&nbsp;<small>float</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>confecção</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>tamanho</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>quantidade_produtos</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                </p>
                </p>

            </form>

            <h2 id="endpoints-POSTapi-fotos-upload--idProduto-">POST api/fotos/upload/{idProduto}</h2>
            <p>
            </p>



            <span id="example-requests-POSTapi-fotos-upload--idProduto-">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/fotos/upload/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "token": "api_token",
};

let body{
    "fileName[]":file_upload,
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
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-fotos-upload--idProduto-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/fotos/upload/{idProduto}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>idProduto</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                    <input type="text" name="idProduto" data-endpoint="POSTapi-fotos-upload--idProduto-"
                        data-component="url" required hidden>
                    <br>
                <h4 class="fancy-heading-panel"><b>Body Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>fileName[]</code></b>&nbsp;&nbsp;<small>file</small> &nbsp;
                    <input type="text" name="idProduto" data-endpoint="POSTapi-fotos-update--idProduto---idImagem-"
                        data-component="url" required hidden>
                    <br>
                </p>
                </p>

            </form>

            <h2 id="endpoints-POSTapi-fotos-update-all--idProduto-">POST api/fotos/update/all/{idProduto}</h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-fotos-update-all--idProduto-">
                <blockquote>Example request:</blockquote>


                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/fotos/update/all/asperiores"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "token": "api_token",
};

let body{
    "fileName[]":file_upload,
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
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-fotos-update-all--idProduto-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/fotos/update/all/{idProduto}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>idProduto</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="idProduto" data-endpoint="POSTapi-fotos-update-all--idProduto-"
                        data-component="url" required hidden>
                    <br>
                </p>
                <h4 class="fancy-heading-panel"><b>Body Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>fileName[]</code></b>&nbsp;&nbsp;<small>file</small> &nbsp;
                    <input type="text" name="idProduto" data-endpoint="POSTapi-fotos-update--idProduto---idImagem-"
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

                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/fotos/update/debitis/et"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "token": "api_token",
};

let body{
    "fileName[]":foto_upload,
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
                data-isarraybody="0"
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-fotos-update--idProduto---idImagem-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/fotos/update/{idProduto}/{idImagem}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
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
                <h4 class="fancy-heading-panel"><b>Body Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>fileName[]</code></b>&nbsp;&nbsp;<small>file</small> &nbsp;
                    <input type="text" name="idProduto" data-endpoint="POSTapi-fotos-update--idProduto---idImagem-"
                        data-component="url" required hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-PUTapi-produtos--idProduto-">PUT api/produtos/{idProduto}</h2>

            <p>
            </p>



            <span id="example-requests-PUTapi-produtos--idProduto-">
                <blockquote>Example request:</blockquote>

                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/produtos/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "token": "api_token",
};

let body ={
    "categorio":Camisa,
    "nome":Camisa Manga Longa,
    "preço":20.00,
    "confecção":Malha,
    "tamanho":M,
    "quantidade_produtos":10 
}

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
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('PUTapi-produtos--idProduto-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-darkblue">PUT</small>
                    <b><code>api/produtos/{idProduto}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>idProduto</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                    <input type="text" name="idProduto" data-endpoint="PUTapi-produtos--idProduto-" data-component="url"
                        required hidden>
                    <br>
                </p>

                <h4 class="fancy-heading-panel"><b>Body Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>categorio</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>nome</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>preço</code></b>&nbsp;&nbsp;<small>float</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>confecção</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>tamanho</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>quantidade_produtos</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-PATCHapi-produtos--idProduto-">PATCH api/produtos/{idProduto}</h2>

            <p>
            </p>



            <span id="example-requests-PATCHapi-produtos--idProduto-">
                <blockquote>Example request:</blockquote>

                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/produtos/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "token": "api_token",
};

let body ={
    "nome":Camisa Polo,
    "preço":15.00,
}

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
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('PATCHapi-produtos--idProduto-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-purple">PATCH</small>
                    <b><code>api/produtos/{idProduto}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>idProduto</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                    <input type="text" name="idProduto" data-endpoint="PATCHapi-produtos--idProduto-"
                        data-component="url" required hidden>
                    <br>
                </p>
                <h4 class="fancy-heading-panel"><b>Body Parameters <i style="color: #C9B624">(one required)</i></b></h4>
                <p>
                    <b><code>categorio</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>nome</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>preço</code></b>&nbsp;&nbsp;<small>float</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>confecção</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>tamanho</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                    <b><code>quantidade_produtos</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-DELETEapi-produtos-delete--idProduto-">DELETE api/produtos/delete/{idProduto}</h2>

            <p>
            </p>



            <span id="example-requests-DELETEapi-produtos-delete--idProduto-">
                <blockquote>Example request:</blockquote>

                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/produtos/delete/dolor"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "token": "api_token",
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
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEapi-produtos-delete--idProduto-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>api/produtos/delete/{idProduto}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>idProduto</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
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

                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/foto/delete/all/et"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "token": "api_token",
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
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEapi-foto-delete-all--idProduto-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>api/foto/delete/all/{idProduto}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>idProduto</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
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

                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/foto/delete/magni/deleniti"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "token": "api_token",
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
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('DELETEapi-foto-delete--idProduto---idFoto-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-red">DELETE</small>
                    <b><code>api/foto/delete/{idProduto}/{idFoto}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>idProduto</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                    <input type="text" name="idProduto" data-endpoint="DELETEapi-foto-delete--idProduto---idFoto-"
                        data-component="url" required hidden>
                    <br>
                </p>
                <p>
                    <b><code>idFoto</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                    <input type="text" name="idFoto" data-endpoint="DELETEapi-foto-delete--idProduto---idFoto-"
                        data-component="url" required hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-GETapi-usuarioToken">GET api/usuarioToken</h2>

            <p>
            </p>



            <span id="example-requests-GETapi-usuarioToken">
                <blockquote>Example request:</blockquote>

                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/usuarioToken?email=sam@email.com&senha=passw"
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
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off" onsubmit="event.preventDefault(); executeTryOut('GETapi-usuarioToken', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/usuarioToken</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Url Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>email</code></b>&nbsp;&nbsp;<small>email</small> &nbsp;
                    <input type="text" name="nome" data-endpoint="PUTapi-usuarios--idUser-" data-component="body"
                        required hidden>
                    <br>
                </p>
                <p>
                    <b><code>senha</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                    <input type="text" name="senha" data-endpoint="PUTapi-usuarios--idUser-" data-component="body"
                        required hidden>
                    <br>
                </p>
            </form>

            <h2 id="endpoints-POSTapi-criarUsuario">POST api/criarUsuario</h2>

            <p>
            </p>



            <span id="example-requests-POSTapi-criarUsuario">
                <blockquote>Example request:</blockquote>

                <pre><code class="language-javascript">const url = new URL(
    "{{ Request::url() }}/api/criarUsuario"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nome":"Sam",
    "senha": "passw",
    "email": "sam@email.com"
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
                data-headers='{"Content-Type":"application\/json","Accept":"application\/json","token":"api_token"}'
                autocomplete="off" onsubmit="event.preventDefault(); executeTryOut('POSTapi-criarUsuario', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/criarUsuario</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Body Parameters <i style="color: green">(required)</i></b></h4>
                <p>
                    <b><code>nome</code></b>&nbsp;&nbsp;<small>string </small> &nbsp;
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
                    <b><code>email</code></b>&nbsp;&nbsp;<small>email</small> &nbsp;
                    <input type="text" name="email" data-endpoint="POSTapi-criarUsuario" data-component="body" required
                        hidden>
                    <br>
                <p>Must be a valid email address.</p>
                </p>

            </form>




        </div>
        <div class="dark-box">
            <div class="lang-selector">
                <a href="#" data-language-name="javascript">javascript</a>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            var exampleLanguages = ["javascript"];
            setupLanguages(exampleLanguages);
        });
    </script>
</body>

</html>
