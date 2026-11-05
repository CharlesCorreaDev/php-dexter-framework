# Novas Constantes Globais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration74.constants.php

---

## Novas Constantes Globais

### Núcleo do PHP

- **`PHP_WINDOWS_EVENT_CTRL_C`**
- **`PHP_WINDOWS_EVENT_CTRL_BREAK`**

### Multibyte String

- **`MB_ONIGURUMA_VERSION`**

### Sockets

Adicionadas as seguintes opções específicas para FreeBSD socket:

- **`SO_LABEL`**
- **`SO_PEERLABEL`**
- **`SO_LISTENQLIMIT`**
- **`SO_LISTENQLEN`**
- **`SO_USER_COOKIE`**

### Tidy

- **`TIDY_TAG_ARTICLE`**
- **`TIDY_TAG_ASIDE`**
- **`TIDY_TAG_AUDIO`**
- **`TIDY_TAG_BDI`**
- **`TIDY_TAG_CANVAS`**
- **`TIDY_TAG_COMMAND`**
- **`TIDY_TAG_DATALIST`**
- **`TIDY_TAG_DETAILS`**
- **`TIDY_TAG_DIALOG`**
- **`TIDY_TAG_FIGCAPTION`**
- **`TIDY_TAG_FIGURE`**
- **`TIDY_TAG_FOOTER`**
- **`TIDY_TAG_HEADER`**
- **`TIDY_TAG_HGROUP`**
- **`TIDY_TAG_MAIN`**
- **`TIDY_TAG_MARK`**
- **`TIDY_TAG_MENUITEM`**
- **`TIDY_TAG_METER`**
- **`TIDY_TAG_NAV`**
- **`TIDY_TAG_OUTPUT`**
- **`TIDY_TAG_PROGRESS`**
- **`TIDY_TAG_SECTION`**
- **`TIDY_TAG_SOURCE`**
- **`TIDY_TAG_SUMMARY`**
- **`TIDY_TAG_TEMPLATE`**
- **`TIDY_TAG_TIME`**
- **`TIDY_TAG_TRACK`**
- **`TIDY_TAG_VIDEO`**

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
