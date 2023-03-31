Todo filter e action ficam na variavel global wp_filter do wordpress

https://developer.wordpress.org/cli/commands/scaffold/
dentro da pasta wp-plugins, execute:
- wp package install wp-cli/dist-archive-command = Irá gerar um workflow para criar um plugin.
- wp dist-archive ./nome-do-plugin = irá gerar o pacote final zipado para upar em qlq site.

Quando se cria um custom post type é preciso fazer a limpeza nos links permanentes.
Fazer um flush pro wp entender que existem novas rotas criadas.

- flush_rewrite_rules()


Auto load - carrega automaticamente as class que estão sendo requisitadas dentro do arquivo x.
Ou seja, n precisa ficar incluindo manualmente as class.

PHP Fatal error = PERIGOSO = Para o seu site, o site não funciona mais.
PHP Error Warning = TIMIDO = Só enche o saco mas não é tão perigoso.