# Define informação de localidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.setlocale.php

---

# setlocale

(PHP 4, PHP 5, PHP 7, PHP 8)

setlocale — Define informação de localidade

### Descrição

function **setlocale**([int](language.types.integer.md) `$category`, [?](language.types.null.md)[string](language.types.string.md) `$locales`, [string](language.types.string.md) `...$rest`): [string](language.types.string.md)|[false](language.types.singleton.md)

Assinatura alternativa (não suportada com argumentos nomeados):

function **setlocale**([int](language.types.integer.md) `$category`, [array](language.types.array.md) `$locale_array`): [string](language.types.string.md)|[false](language.types.singleton.md)

Define informação de localidade.

**Aviso**

As informações de localidade são mantidas por processo, não por thread.
Se o PHP estiver sendo executado em uma API de servidor multithread,
mudanças repentinas poderão ocorrer nas configurações de localidade enquanto um
script estiver em execução, embora o script em si nunca tenha chamado
**setlocale()**. Isso acontece devido a outros scripts
sendo executados em diferentes threads do mesmo processo ao mesmo tempo,
alterando a localidade de todo o processo usando **setlocale()**.
No Windows, as informações de localidade são mantidas por thread a partir do PHP 7.0.5.

### Parâmetros

`category`
:   `category` é uma constante nomeada que especifica a
    categoria das funções afetadas pela configuração de localidade:

    - **`LC_ALL`** para todas as opções abaixo
    - **`LC_COLLATE`** para comparação de strings, consulte
      [strcoll()](function.strcoll.md)
    - **`LC_CTYPE`** para classificação e conversão de caracteres, por
      exemplo [ctype\_alpha()](function.ctype-alpha.md)
    - **`LC_MONETARY`** para [localeconv()](function.localeconv.md)
    - **`LC_NUMERIC`** para separador de decimais (Consulte também
      [localeconv()](function.localeconv.md))
    - **`LC_TIME`** para formatação de data e horário com
      [strftime()](function.strftime.md)
    - **`LC_MESSAGES`** para respostas de sistema (disponível se o PHP foi compilado com a
      `libintl`)

`locales`
:   Se `locales` for uma string vazia
    `""` ou **`null`**, os nomes de localidade serão definidos a partir dos
    valores das variáveis ​​de ambiente com os mesmos nomes das categorias
    acima, ou de "LANG".

    Se `locales` for `"0"`,
    a configuração de localidade não será afetada, apenas a configuração atual será retornada.

    Se `locales` for seguido por parâmetros
    adicionais, a função tentará definir cada parâmetro como um
    novo locale até obter sucesso. Isto é útil se uma localidade for conhecida por
    nomes diferentes em sistemas diferentes ou para fornecer um substituto
    para uma localidade possivelmente não disponível.

`rest`
:   Parâmetros de string opcionais para tentar como configurações de localidade até obter
    sucesso.

`locale_array`
:   A função tenta definir cada elemento do array como um
    novo local até obter sucesso. Isto é útil se uma localidade for conhecida por
    nomes diferentes em sistemas diferentes ou para fornecer um substituto
    para uma localidade possivelmente não disponível.

> **Nota**:
>
> No Windows, setlocale(LC\_ALL, '') define os nomes de localidade a partir dados
> configurações regionais e de idioma do sistema (acessíveis através do Painel de Controle).

### Valor Retornado

Retorna a nova localidade atual ou **`false`** se a funcionalidade de localidade não
estiver implementada em sua plataforma, a localidade especificada não existir ou
o nome da categoria for inválido.

Um nome de categoria inválido também gera uma mensagem de alerta. Os nomes de categoria/localidade
podem ser encontrados na [» RFC 1766](https://datatracker.ietf.org/doc/html/rfc1766)
e na [» ISO 639](https://www.loc.gov/standards/iso639-2/php/code_list.php).
Sistemas diferentes possuem esquemas de nomenclatura diferentes para localidades.

> **Nota**:
>
> O valor de retorno de **setlocale()** depende
> do sistema que o PHP está sendo executado. Ele retorna exatamente
> o que a função de sistema `setlocale` retorna.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Passar um inteiro `0` como o argumento de `locales` não é mais suportado e agora lança um [TypeError](class.typeerror.md). |

### Examples

**Exemplo #1 Exemplos de **setlocale()****

```
<?php
/* Define a localidade para holandês */
setlocale(LC_ALL, 'nl_NL');

/* Saída: vrijdag 22 december 1978 */
echo strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978));

/* tenta nomes de localidades diferentes possíves para alemão */
$loc_de = setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge');
echo "A localidade preferida para alemão neste sistema é '$loc_de'";
?>
```

**Exemplo #2 Recuperando a configuração atual de **setlocale()****

```
<?php
/* Recuperando a configuração atual */
$current = setlocale(LC_ALL, null);

echo "Localidade atual: '$current'";
?>
```

**Exemplo #3 Exemplos de **setlocale()** para Windows**

```
<?php
/* Define a localidade para holandês */
setlocale(LC_ALL, 'nld_nld');

/* Saída: vrijdag 22 december 1978 */
echo strftime("%A %d %B %Y", mktime(0, 0, 0, 12, 22, 1978));

/* tenta nomes de localidades diferentes possíves para alemão */
$loc_de = setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'deu_deu');
echo "A localidade preferida para alemão neste sistema é '$loc_de'";
?>
```

### Notas

**Dica**

Os usuários do Windows encontrarão informações úteis sobre
strings de `locales` no site
MSDN da Microsoft. As strings de idioma suportadas podem ser
encontradas na
[» documentação de strings de linguagem](https://msdn.microsoft.com/en-us/library/39cwe7zf.aspx)
e as strings de país/região suportadas podem ser encontradas na
[» documentação de strings de país/região](https://msdn.microsoft.com/en-us/library/cdax410z.aspx).

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
