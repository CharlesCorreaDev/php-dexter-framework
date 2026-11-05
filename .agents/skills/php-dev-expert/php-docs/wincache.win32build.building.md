# Compilando e construindo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wincache.win32build.building.php

---

## Compilando e construindo

As etapas a seguir descrevem como compilar e criar o WinCache no sistema operacional Windows:

1. Abra um prompt de comando que é usado para construir PHP
2. Vá para a pasta raiz onde as fontes PHP estão presentes
3. Execute o comando:

   ```
   cscript.exe win32\build\buildconf.js
   ```
4. Execute o comando:

   ```
   configure.bat --help
   ```

   A saída conterá um novo sinalizador `--enable-wincache`.
5. Execute o comando:

   ```
   configure.js [all options used to build PHP] --enable-wincache
   ```

   `--enable-wincache` é a única opção extra
   necessária para garantir que a extensão WinCache seja compilada corretamente.
   Esta opção compilará o WinCache e o vinculará estaticamente à DLL do PHP.
   Para compilar a extensão WinCache como uma DLL independente, use a opção
   `--enable-wincache=shared`.
6. Execute o comando:

   ```
   nmake
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
