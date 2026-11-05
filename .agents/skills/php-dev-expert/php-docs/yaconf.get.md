# Recupera um item

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaconf.get.php

---

# Yaconf::get

(PECL yaconf >= 1.0.0)

Yaconf::get — Recupera um item

### Descrição

public static function **Yaconf::get**([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$default_value` = NULL): [mixed](language.types.mixed.md)

### Parâmetros

`name`
:   Chave de configuração, a chave se parece com "arquivo.chave" ou "arquivo.secao,chave".

`default_value`
:   Se a chave não existir, o método retorna o valor deste parâmetro como resultado.

### Valor Retornado

Retorna o resultado da configuração (string ou array) se a chave existir,
ou retorno o valor do parâmetro default\_value caso contrário.

### Examples

**Exemplo #1 Exemplo de **INI()****

```
;arquivo foo.ini, localizado no diretório yaconf.directoy
[SecaoA]
;par de chave-valor
chave=valor
;hash[a]=valor
hash.a=valor
;arr[0]=valor
arr.0=valor
;ou
arr[]=valor

;SecaoB herda SecaoA
[SecaoB:SecaoA]
;substitui a configuração "chave" na SecaoA
chave=novo_valor
```

O exemplo acima produzirá
algo semelhante a:

```
php7 -r 'var_dump(Yaconf::get("foo.SecaoA.chave"));'
// string(5) "valor"

php7 -r 'var_dump(Yaconf::get("foo.SecaoB.chave"));'
// string(10) "novo_valor"

php7 -r 'var_dump(Yaconf::get("foo")["SecaoA"]["hash"]);'
// array(1)
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
