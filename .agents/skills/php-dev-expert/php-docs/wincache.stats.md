# Script de estatísticas do WinCache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wincache.stats.php

---

## Script de estatísticas do WinCache

O pacote de instalação do WinCache inclui um script PHP,
wincache.php, que pode ser usado para obter informações de cache
e estatísticas.

Se a extensão WinCache foi instalada por meio do Microsoft Web Platform Installer,
este script está localizado em
%SystemDrive%\Arquivos de Programas\IIS\Windows Cache for PHP\.
Em uma versão de 64 bits do sistema operacional Windows Server, o script está localizado em
%SystemDrive%\Arquivos de Programas (x86)\IIS\Windows Cache for PHP.
Se a extensão foi instalada manualmente, o wincache.php
estará localizado na mesma pasta de onde o conteúdo do pacote de instalação foi extraído.

Para usar wincache.php, copie-o para a pasta raiz de um site ou
para qualquer subpasta. Para proteger o script, abra-o em qualquer editor de texto e substitua os valores das constantes
*USERNAME* e *PASSWORD*.
Se qualquer outra autenticação do IIS estiver habilitada no servidor,
siga as instruções nos comentários:

**Exemplo #1 Configuração de autenticação para wincache.php**

```
<?php
/**
 * ======================== DEFINIÇÕES DE CONFIGURAÇÃO ==============================
 * Se você não quiser usar autenticação para esta página, defina USE_AUTHENTICATION como 0.
 * Se você usar autenticação, substitua a senha padrão.
 */
define('USE_AUTHENTICATION', 1);
define('USERNAME', 'wincache');
define('PASSWORD', 'wincache');

/**
 * A autenticação básica do PHP funcionará somente quando o IIS estiver configurado para suportar
 * Autenticação Anônima e nada mais. Se o IIS estiver configurado para suportar/usar
 * qualquer outro tipo de autenticação, como Básica/Negociação/Digest, etc., isso não funcionará.
 * Nesse caso, use o array abaixo para definir os nomes dos usuários em seu
 * domínio/rede/grupo de trabalho aos quais você deseja conceder acesso.
 */
$user_allowed = array('DOMAIN\user1', 'DOMAIN\user2', 'DOMAIN\user3');

/**
 * Se o array contiver a string 'all', todos os usuários autenticados pelo IIS
 * terão acesso à página. Descomente a linha abaixo e comente a linha acima
 * para conceder acesso a todos os usuários autenticados pelo IIS.
 */
/* $user_allowed = array('all'); */

/** ===================== FIM DAS DEFINIÇÕES DE CONFIGURAÇÃO ========================== */
?>
```

> **Nota**:
>
> Sempre proteja o script wincache.php usando
> a autenticação integrada ou o mecanismo de autenticação do servidor.
> Deixar este script desprotegido pode comprometer a segurança do seu
> aplicativo web e do servidor web.

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
