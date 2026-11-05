# Constantes de enumeração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.enumerations.constants.php

---

## Constantes de enumeração

Enumerações podem incluir constantes, que podem ser públicas, privadas ou protegidas,
apesar das privadas e protegidas serem equivalentes na prática, pois herança não é permitida.

Uma constante de enumeração pode se referir a um caso de enumeração:

```
<?php

enum Tamanho
{
    case Pequeno;
    case Medio;
    case Grande;

    public const Enorme = self::Grande;
}

var_dump(Tamanho::Enorme);
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
