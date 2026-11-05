# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.enumerations.examples.php

---

## Examples

**Exemplo #1 Valores limitados básicos**

```
<?php

enum Ordem
{
    case Asc;
    case Desc;
}

function consulta($campos, $filtros, Ordem $ordem = Ordem::Asc)
{
     /* ... */
}
```

A função `consulta()` agora pode prosseguir segura, sabendo que a
`$ordem` tem garantia de ser `Ordem::Asc`
ou `Ordem::Desc`. Qualquer outro valor resultaria em um
[TypeError](class.typeerror.md), então nenhuma verificação ou teste de erro é necessária.

**Exemplo #2 Valores exclusivos avançados**

```
<?php

enum EstadoDeUsuario: string
{
    case Pendente = 'P';
    case Ativo = 'A';
    case Suspenso = 'S';
    case CanceladoPeloUsuario = 'C';

    public function rotulo(): string
    {
        return match ($this) {
            self::Pendente => 'Pendente',
            self::Ativo => 'Ativo',
            self::Suspenso => 'Suspenso',
            self::CanceladoPeloUsuario => 'Cancelado pelo usuário',
        };
    }
}

$status = EstadoDeUsuario::Suspenso;
var_dump($status->rotulo());
```

Neste exemplo, o estado de um usuário pode ser, exclusivamente, `EstadoDeUsuario::Pendente`,
`EstadoDeUsuario::Ativo`, `EstadoDeUsuario::Suspenso`, ou
`EstadoDeUsuario::CanceladoPeloUsuario`. Uma função pode tipar um parâmetro contra
`EstadoDeUsuario` e aceitar então apenas aqueles quatro valores, ponto final.

Todos os quatros valores possuem um método `rotulo()`, que retorna uma string legível para humanos.
Essa string é independente da string equivalente escalar do "nome de máquina", que pode ser usado em,
por exemplo, um campo de banco de dados um uma caixa de seleção HTML.

```
<?php

enum EstadoDeUsuario: string
{
    case Pendente = 'P';
    case Ativo = 'A';
    case Suspenso = 'S';
    case CanceladoPeloUsuario = 'C';

    public function rotulo(): string
    {
        return match($this) {
            self::Pendente => 'Pendente',
            self::Ativo => 'Ativo',
            self::Suspenso => 'Suspenso',
            self::CanceladoPeloUsuario => 'Cancelado pelo usuário',
        };
    }
}

foreach (EstadoDeUsuario::cases() as $caso) {
    printf(
        "<option value=\"%s\">%s</option>\n",
        htmlentities($caso->value),
        htmlentities($caso->rotulo())
    );
}
```

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
