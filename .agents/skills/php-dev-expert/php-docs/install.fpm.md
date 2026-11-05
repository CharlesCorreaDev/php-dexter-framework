# FastCGI Process Manager (FPM)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.fpm.php

---

# FastCGI Process Manager (FPM)

## Índice

- [Instalação](install.fpm.install.md)
- [Configuração](install.fpm.configuration.md)

FPM (FastCGI Process Manager) é
uma implementação PHP primária do FastCGI contendo alguns recursos úteis (principalmente) para sites pesados.

Entre as features estão incluídas:

- gerenciamento de processos avançado com stop/start;
- habilidade para começar a trabalhar com
  uid/gid/chroot/environment diferentes, ouvindo em diferentes portas e utilizando-se
  de php.ini distintos (troca de safe\_mode);
- stdout e stderr logging configuráveis;
- reinício de emergência em caso de destruição acidental de opcode cache;
- acelera o processo de upload;
- "slowlog - log dos scripts (não apenas seus nomes, mas os backtraces
  PHP também, utilizando ptrace ou semelhantes para ler dados do processo
  remoto) ainda que sejam lentos de coletar;
- [fastcgi\_finish\_request()](function.fastcgi-finish-request.md) - função especial para finalizar
  a requisição e enviar todos os dados, ao mesmo tempo continuando a fazer algo
  potencialmente demorado (conversão de vídeo, processamento de estatísticas, etc);
- criação de processos estático/dinâmico/sob demanda;
- informações de status básicas e estendidas (similar ao Apache mod\_status) em
  vários formatos suportados, como: json, xml e openmetrics;
- php.ini-baseado em arquivos de configurações.

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
