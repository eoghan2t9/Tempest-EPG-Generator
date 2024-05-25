<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'comingsoon.it',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-05-16',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Rome',
  'culture' => 'it',
  'max_day' => '6',
  'episodeOption' => '1',
  'url1' => 'https://www.comingsoon.it/tv/##urldate1##/tutti-programmi/##channel##/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.comingsoon.it',
  'urldate_format1' => '#daylist#oggi|domani|dopodomani|giorno-3|giorno-4|giorno-5',
  'show' => '<div class="body">.*?(?:<a href=)(.*?)(?:<\\/a>).*?<\\/div>\\s*<\\/section>',
  'start' => '<span>(\\d+[\\.:]\\d+)',
  'start_format' => 'G#i',
  'duration' => 'durata\\s(\\d+)||#format#m',
  'title' => '"titolo h2">\\s*(.*?)<\\/||#replace#(\\s-\\s.*?)$||',
  'subtitle' => '"titolo h2">.*?\\((.*?)\\)\\s*<\\/',
  'category' => 'categoria h3 c">(.*?)<\\/',
  'season' => '-\\sS\\.(\\d+)',
  'episode' => '\\sE\\.(\\d+)',
  'channel_logo' => '<div class="header">.*?<img class="lazyload" data-src="(.*?)"',
  'pagekey1' => '^"(\\/.*?)"',
  'detail_url1' => 'https://www.comingsoon.it##pagekey1##',
  'detail_requestOption1' => '1',
  'detail_accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'detail_host_header1' => 'www.comingsoon.it',
  'detail_title' => '"titolo h1 small">(.*?)<\\/h1>',
  'detail_title_original' => '"sottotitolo h3">\\(\\s*(.*?)\\s*\\)',
  'detail_desc' => '<blockquote>\\s*<div class="h3">Curiosità<\\/div>(.*?)<\\/blockquote|>|<span id="trama-.*?<\\/h2>\\s*<p>(.*?)<\\/div>|>|<div class="descrizione p">(.*?)<\\/div>',
  'detail_category' => '<b>Genere:<\\/b>\\s*(.*?)<\\/div>||#split#(,\\s)',
  'detail_showicon' => '<source media=".*?data-srcset="(.*?)"|#|shadow">\\s*<img src="(.*?)"',
  'detail_season' => 'Stagione:\\s*<span class="p">(\\d+)',
  'detail_episode' => '<b>Episodi:<\\/b>\\s*<span>(\\d+)',
  'detail_production_date' => '<b>Anno:<\\/b>\\s*(.*?)<\\/div>',
  'detail_actor' => '<div class="nome">(.*?)<\\/div>|>|<b>Attori:<\\/b>\\s*(.*?)<\\/div>||#split#(,\\s)',
  'detail_role' => '<div class="alias">(.*?)<\\/div>',
  'detail_director' => '<b>Regista:<\\/b>\\s*(.*?)<\\/div>|>|<b>Regia:<\\/b>\\s*(.*?)<\\/div>||#split#(,\\s)',
  'detail_producer' => '<b>Produzione:<\\/b>\\s*(.*?)<\\/div>||#split#(,\\s)',
  'detail_composer' => '<b>Musiche:<\\/b>\\s*(.*?)<\\/div>||#split#(,\\s)',
  'detail_editor' => '<b>Montaggio:<\\/b>\\s*(.*?)<\\/div>||#split#(,\\s)',
  'detail_writer' => '<b>Sceneggiatura:<\\/b>\\s*(.*?)<\\/div>||#split#(,\\s)',
  'detail_country' => '<b>Paese:<\\/b>\\s*(.*?)<\\/div>||#split#(,\\s)',
  'detail_star_rating' => 'Valutazione<\\/div>\\s*<span>(\\d+(?:\\.\\d+)?)||#addend#/5',
  'ccurl1' => 'https://www.comingsoon.it/tv/oggi/sera/',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'cchost_header1' => 'www.comingsoon.it',
  'ccchannel_block' => '<div class="lista-tag film closed mbm">.*?<\\/ul>',
  'ccchannel_id' => '<a href="\\/tv\\/oggi\\/sera\\/(.*?)\\/',
  'ccchannel_name' => '<a href=".*?>(.*?)<\\/a>',
);
?>