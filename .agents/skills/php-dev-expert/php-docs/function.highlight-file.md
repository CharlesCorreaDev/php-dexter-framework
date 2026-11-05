# Destaca a sintaxe de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.highlight-file.php

---

# highlight\_file

(PHP 4, PHP 5, PHP 7, PHP 8)

highlight\_file — Destaca a sintaxe de um arquivo

### Descrição

function **highlight\_file**([string](language.types.string.md) `$filename`, [bool](language.types.boolean.md) `$return` = **`false`**): [string](language.types.string.md)|[bool](language.types.boolean.md)

Imprime ou retorna a versão com destaque de sintaxe do código contigo
no arquivo `filename` utilizando as cores definidas no
destacador de sintaxe nativo do PHP.

Muitos servidores são configurados para destacar automaticamente os arquivos
com extensão *phps*. Por exemplo, o arquivo
example.phps quando acessado irá mostrar
o código fonte com destaque de cores. Para ativar isso, acrescente
a seguinte linha no httpd.conf:

```
AddType application/x-httpd-php-source .phps
```

### Parâmetros

`filename`
:   Caminho do arquivo PHP a ser destacado.

`return`
:   Informe esse parâmetro como **`true`** para fazer essa função retornar
    o código destacado (ao invés de imprimir).

### Valor Retornado

Se `return` for **`true`**, retorna o código destacado
como uma string ao invés de imprimir. Se não, irá retornar
**`true`** no sucesso e **`false`** no caso de falhas.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | O HTML resultante foi alterado. |

### Notas

**Cuidado**

Cuidados devem ser tomados quando utilizando a função **highlight\_file()**
para prevenir que você não revele informações sensíveis inadvertidamente,
como senhas e outros tipos de informações que possam criar
risco de segurança.

> **Nota**:
>
> Quando o parâmetro `return`
> é usado, esta função usa um buffer de saída interno, portanto não pode ser usada em uma função
> callback da função [ob\_start()](function.ob-start.md).

### Veja também

- [highlight\_string()](function.highlight-string.md) - Destaque de sintaxe de uma string
- [Diretivas INI de highlight](misc.configuration.md#ini.syntax-highlighting)

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
