# Métodos estáticos de enumerações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.enumerations.static-methods.php

---

## Métodos estáticos de enumerações

Enumerações também podem ter métodos estáticos. O uso para métodos estáticos na
própria enumeração é primariamente para construtores alternativos. Por exemplo:

```
<?php

enum Tamanho
{
    case Pequeno;
    case Medio;
    case Grande;

    public static function deComprimento(int $cm): self
    {
        return match (true) {
            $cm < 50 => self::Pequeno,
            $cm < 100 => self::Medio,
            default => self::Grande,
        };
    }
}

var_dump(Tamanho::fromLength(50));
```

Métodos estáticos podem ser públicos, privados ou protegidos apesar dos privados e
protegidos serem equivalentes na prática, pois herança não é permitida.

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
