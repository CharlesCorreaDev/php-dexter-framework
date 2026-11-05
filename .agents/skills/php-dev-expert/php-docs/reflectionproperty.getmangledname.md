# Obtém o nome codificado da propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.getmangledname.php

---

# ReflectionProperty::getMangledName

(No version information available, might only be in Git)

ReflectionProperty::getMangledName — Obtém o nome codificado da propriedade

### Descrição

public function **ReflectionProperty::getMangledName**(): [string](language.types.string.md)

Retorna o nome codificado (interno) da propriedade, que codifica o
escopo de visibilidade para propriedades privadas e protegidas.

Para propriedades públicas, o nome codificado é idêntico ao nome da propriedade.
Para propriedades protegidas, o nome codificado tem a forma
`\0*\0nome`.
Para propriedades privadas, o nome codificado tem a forma
`\0NomeDaClasse\0nome`.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome codificado da propriedade refletida.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Este método foi introduzido. |

### Veja também

- [ReflectionProperty::getName()](reflectionproperty.getname.md) - Obtém o nome da propriedade

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
