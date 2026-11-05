# Exemplo de uso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gender.example.admin.php

---

## Exemplo de uso

Exemplo de uso da classe Gender.

**Exemplo #1 Exemplo de uso**

```
<?php

namespace Gender;

$gender = new Gender;

$name = "Milene";
$country = Gender::FRANCE;

$result = $gender->get($name, $country);

$data = $gender->country($country);

switch($result) {
    case Gender::IS_FEMALE:
        printf("O nome %s é feminimo em %s\n", $name, $data['country']);
    break;

    case Gender::IS_MOSTLY_FEMALE:
        printf("O nome %s é predominantemente feminino em %s\n", $name, $data['country']);
    break;

    case Gender::IS_MALE:
        printf("O nome %s é masculino em %s\n", $name, $data['country']);
    break;

    case Gender::IS_MOSTLY_MALE:
        printf("O nome %s é predominantemente masculino em %s\n", $name, $data['country']);
    break;

    case Gender::IS_UNISEX_NAME:
        printf("O nome %s é unissex em %s\n", $name, $data['country']);
    break;

    case Gender::IS_A_COUPLE:
        printf("O nome %s é masculino e feminino em %s\n", $name, $data['country']);
    break;

    case Gender::NAME_NOT_FOUND:
        printf("O nome %s não foi encontrado para %s\n", $name, $data['country']);
    break;

    case Gender::ERROR_IN_NAME:
        echo "Há um erro no nome fornecido!\n";
    break;

    default:
        echo "Ocorreu um erro!\n";
    break;

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
