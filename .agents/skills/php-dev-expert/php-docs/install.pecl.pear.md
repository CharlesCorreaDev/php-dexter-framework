# Compilando extensões PECL compartilhadas com o comando pecl

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.pecl.pear.php

---

## Compilando extensões PECL compartilhadas com o comando pecl

**Aviso**

PECL está obsoleto.
O PHP Installer for Extensions (PIE) substitui o PECL e é o recomendado para instalar extensões.
Descubra mais em [» https://github.com/php/pie](https://github.com/php/pie)

O PECL facilita a criação de extensões PHP compartilhadas.
Usando o
[» comando pecl](https://pear.php.net/manual/en/guide.users.commandline.cli.php),
faça o seguinte:

```
$ pecl install extname
```

Isso fará o download do código-fonte de *extname*,
compilará e instalará extname.so em
[extension\_dir](ini.core.md#ini.extension-dir).
extname.so
pode então ser carregada usando o php.ini.

Por padrão, o comando **pecl** não instalará pacotes
marcados com o estado `alpha`
ou
`beta`.
Se nenhum pacote `stable` estiver disponível,
um pacote `beta` pode ser instalado usando o seguinte
comando:

```
$ pecl install extname-beta
```

Uma versão específica também pode ser instalada usando esta forma:

```
$ pecl install extname-0.1
```

> **Nota**:
>
> Depois de habilitar a extensão no php.ini, será necessário reiniciar
> o serviço web para que as alterações sejam detectadas.

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
