# Insult SDK

Generate humorous insults in multiple languages, with custom templates and target names

> TypeScript, Python, PHP, Golang, Ruby, Lua SDKs, a CLI, an interactive REPL, and an MCP server for AI agents — all generated from one OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).

## About Insult API

The Insult API is a small public service run by [Matt Bastien](https://insult.mattbas.org/api/) that returns randomly generated, light-hearted insults. It is mirrored on the community catalogue at [freepublicapis.com](https://freepublicapis.com/insult-api).

What you get from the API:

- Full insults as plain text, JSON, or HTML (`/api/insult`, `/api/insult.<format>`)
- Single adjectives in the same three formats (`/api/adjective`, `/api/adjective.<format>`)
- Language-scoped variants via `/api/<lang>/insult.<format>` and `/api/<lang>/adjective.<format>`, with English (`en`) and English corporate jargon (`en_corporate`) documented
- Optional `template`, `who`, and `plural` query parameters to customise wording and the target of the insult

JSON responses include an `error` flag, the generated `insult` string, and an `args` echo of the parameters used; failures return `error: true` with an `error_message`. The community page notes that CORS is enabled and no authentication is required.

## Try it

**TypeScript**
```bash
npm install insult
```

**Python**
```bash
pip install insult-sdk
```

**PHP**
```bash
composer require voxgig/insult-sdk
```

**Golang**
```bash
go get github.com/voxgig-sdk/insult-sdk/go
```

**Ruby**
```bash
gem install insult-sdk
```

**Lua**
```bash
luarocks install insult-sdk
```

## 30-second quickstart

### TypeScript

```ts
import { InsultSDK } from 'insult'

const client = new InsultSDK({})

```

See the [TypeScript README](ts/README.md) for the
full guide, or scroll down for the same example in other languages.

## What's in the box

| Surface | Use it for | Path |
| --- | --- | --- |
| **SDK** (TypeScript, Python, PHP, Golang, Ruby, Lua) | App integration | `ts/` `py/` `php/` `go/` `rb/` `lua/` |
| **CLI** | Scripts, CI, ops, one-off API calls | `go-cli/` |
| **MCP server** | AI agents (Claude, Cursor, Cline) | `go-mcp/` |

## Use it from an AI agent (MCP)

The generated MCP server exposes every operation in this SDK as an
[MCP](https://modelcontextprotocol.io) tool that Claude, Cursor or Cline
can call directly. Build and register it:

```bash
cd go-mcp && go build -o insult-mcp .
```

Then add it to your agent's MCP config (Claude Desktop, Cursor, etc.):

```json
{
  "mcpServers": {
    "insult": {
      "command": "/abs/path/to/insult-mcp"
    }
  }
}
```

## Entities

The API exposes 4 entities:

| Entity | Description | API path |
| --- | --- | --- |
| **Adjective** | A single generated adjective, served from `/api/adjective` and `/api/adjective.<format>` (plus language-scoped `/api/<lang>/adjective.<format>`). | `/adjective` |
| **Adjectiveformat** | Format-specific adjective responses (`txt`, `json`, or `html`) returned by `/api/adjective.<format>`. | `/adjective.{format}` |
| **Insult** | A full generated insult, served from `/api/insult` and `/api/insult.<format>` (plus language-scoped `/api/<lang>/insult.<format>`), with optional `template`, `who`, and `plural` parameters. | `/insult` |
| **Insultformat** | Format-specific insult responses (`txt`, `json`, or `html`) returned by `/api/insult.<format>`. | `/insult.{format}` |

Each entity supports the following operations where available: **load**,
**list**, **create**, **update**, and **remove**.

## Quickstart in other languages

### Python

```python
from insult_sdk import InsultSDK

client = InsultSDK({})


# Load a specific adjective
adjective, err = client.Adjective(None).load(
    {"id": "example_id"}, None
)
```

### PHP

```php
<?php
require_once 'insult_sdk.php';

$client = new InsultSDK([]);


// Load a specific adjective
[$adjective, $err] = $client->Adjective(null)->load(
    ["id" => "example_id"], null
);
```

### Golang

```go
import sdk "github.com/voxgig-sdk/insult-sdk/go"

client := sdk.NewInsultSDK(map[string]any{})

```

### Ruby

```ruby
require_relative "Insult_sdk"

client = InsultSDK.new({})


# Load a specific adjective
adjective, err = client.Adjective(nil).load(
  { "id" => "example_id" }, nil
)
```

### Lua

```lua
local sdk = require("insult_sdk")

local client = sdk.new({})


-- Load a specific adjective
local adjective, err = client:Adjective(nil):load(
  { id = "example_id" }, nil
)
```

## Unit testing in offline mode

Every SDK ships a test mode that swaps the HTTP transport for an
in-memory mock, so unit tests run offline.

### TypeScript

```ts
const client = InsultSDK.test()
const result = await client.Adjective().load({ id: 'test01' })
// result.ok === true, result.data contains mock data
```

### Python

```python
client = InsultSDK.test(None, None)
result, err = client.Adjective(None).load(
    {"id": "test01"}, None
)
```

### PHP

```php
$client = InsultSDK::test(null, null);
[$result, $err] = $client->Adjective(null)->load(
    ["id" => "test01"], null
);
```

### Golang

```go
client := sdk.TestSDK(nil, nil)
result, err := client.Adjective(nil).Load(
    map[string]any{"id": "test01"}, nil,
)
```

### Ruby

```ruby
client = InsultSDK.test(nil, nil)
result, err = client.Adjective(nil).load(
  { "id" => "test01" }, nil
)
```

### Lua

```lua
local client = sdk.test(nil, nil)
local result, err = client:Adjective(nil):load(
  { id = "test01" }, nil
)
```

## How it works

Every SDK call runs the same five-stage pipeline:

1. **Point** — resolve the API endpoint from the operation definition.
2. **Spec** — build the HTTP specification (URL, method, headers, body).
3. **Request** — send the HTTP request.
4. **Response** — receive and parse the response.
5. **Result** — extract the result data for the caller.

A feature hook fires at each stage (e.g. `PrePoint`, `PreSpec`,
`PreRequest`), so features can inspect or modify the pipeline without
forking the SDK.

### Features

| Feature | Purpose |
| --- | --- |
| **TestFeature** | In-memory mock transport for testing without a live server |

Pass custom features via the `extend` option at construction time.

### Direct and Prepare

For endpoints the entity model doesn't cover, use the low-level methods:

- **`direct(fetchargs)`** — build and send an HTTP request in one step.
- **`prepare(fetchargs)`** — build the request without sending it.

Both accept a map with `path`, `method`, `params`, `query`,
`headers`, and `body`. See the [How-to guides](#how-to-guides) below.

## How-to guides

### Make a direct API call

When the entity interface does not cover an endpoint, use `direct`:

**TypeScript:**
```ts
const result = await client.direct({
  path: '/api/resource/{id}',
  method: 'GET',
  params: { id: 'example' },
})
console.log(result.data)
```

**Python:**
```python
result, err = client.direct({
    "path": "/api/resource/{id}",
    "method": "GET",
    "params": {"id": "example"},
})
```

**PHP:**
```php
[$result, $err] = $client->direct([
    "path" => "/api/resource/{id}",
    "method" => "GET",
    "params" => ["id" => "example"],
]);
```

**Go:**
```go
result, err := client.Direct(map[string]any{
    "path":   "/api/resource/{id}",
    "method": "GET",
    "params": map[string]any{"id": "example"},
})
```

**Ruby:**
```ruby
result, err = client.direct({
  "path" => "/api/resource/{id}",
  "method" => "GET",
  "params" => { "id" => "example" },
})
```

**Lua:**
```lua
local result, err = client:direct({
  path = "/api/resource/{id}",
  method = "GET",
  params = { id = "example" },
})
```

## Per-language documentation

- [TypeScript](ts/README.md)
- [Python](py/README.md)
- [PHP](php/README.md)
- [Golang](go/README.md)
- [Ruby](rb/README.md)
- [Lua](lua/README.md)

## Using the Insult API

- Upstream: [https://insult.mattbas.org/api/](https://insult.mattbas.org/api/)

---

Generated from the Insult API OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).
