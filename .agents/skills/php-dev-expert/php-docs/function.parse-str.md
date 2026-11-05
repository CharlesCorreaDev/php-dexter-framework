# Interpreta uma string como uma requisição URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.parse-str.php

---

# parse\_str

(PHP 4, PHP 5, PHP 7, PHP 8)

parse\_str — Interpreta uma string como uma requisição URL

### Descrição

function **parse\_str**([string](language.types.string.md) `$string`, [array](language.types.array.md) `&$result`): [void](language.types.void.md)

Interpreta `string` como se ela fosse uma string de consulta
passada via URL e define chaves no array informado em `result`.
Se nenhum parâmetro `result` for passado, os valores são
definidos como variáveis no escopo atual.

### Parâmetros

`string`
:   A string de entrada.

`result`
:   Uma variável passada por referência, que será definida como um array
    contendo os pares chave-valor extraídos de `string`.
    Se o parâmetro `result` não for passado,
    uma variável separada será definida no escopo local para cada chave.

    **Aviso**

    Utilizar esta função sem o parâmetro `result` é altamente
    *DESENCORAJADO* e foi *DESCONTINUADO* a partir do PHP 7.2.
    Desde o 8.0.0, o parâmetro `result` é *obrigatório*.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `result` não é mais opcional. |
| 7.2.0 | Utilização de **parse\_str()** sem o segundo parâmetro agora emite um aviso de **`E_DEPRECATED`**. |

### Examples

**Exemplo #1 Usando **parse\_str()****

```
<?php
$str = "primeiro=valor&arr[]=foo+bar&arr[]=baz";

// Recomendado
parse_str($str, $output);
echo $output['primeiro'], PHP_EOL;  // valor
echo $output['arr'][0], PHP_EOL; // foo bar
echo $output['arr'][1], PHP_EOL; // baz
?>
```

Quaisquer espaços e pontos em nomes de parâmetros são convertidos em sublinhados
ao criar chaves de array ou variáveis ​​locais.
Isso ocorre porque nomes de variáveis ​​em PHP não podem conter espaços
ou pontos, e se aplica mesmo ao usar esta função com o parâmetro
`result` recomendado.

**Exemplo #2 Codificação de nomes em **parse\_str()****

```
<?php
parse_str("Meu Valor=Algo", $output);
echo $output['Meu_Valor']; // Algo
?>
```

### Notas

> **Nota**:
>
> **parse\_str()** é afetada pela diretiva [max\_input\_vars](info.configuration.md#ini.max-input-vars).
> Exceder esse limite emite um **`E_WARNING`**,
> e quaisquer variáveis ​​além do limite não são adicionadas ao array de resultados.
> O padrão é 1000; ajuste [max\_input\_vars](info.configuration.md#ini.max-input-vars) conforme necessário.

> **Nota**:
>
> Todos os valores preenchidos no array `result`
> (ou variáveis ​​criadas se o segundo parâmetro não estiver definido)
> já são decodificados por URL usando as mesmas regras de [urldecode()](function.urldecode.md).

> **Nota**:
>
> Para obter a string de consulta da solicitação atual, pode ser usada a variável
> [$\_SERVER['QUERY\_STRING']](reserved.variables.server.md).
> Além disso, leia a seção sobre
> [variáveis de fontes
> externas](language.variables.external.md).

### Veja também

- [parse\_url()](function.parse-url.md) - Analisa uma URL e retorna seus componentes
- [pathinfo()](function.pathinfo.md) - Retorna informações sobre um caminho de arquivo
- [http\_build\_query()](function.http-build-query.md) - Gera a string de consulta em formato URL
- [urldecode()](function.urldecode.md) - Decodifica uma URL codificada

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
