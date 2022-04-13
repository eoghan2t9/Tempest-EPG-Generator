<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'gatotv.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-04-12',
  'rev_no' => 'R0',
  'timezone' => 'America/Mexico_City',
  'culture' => 'es',
  'max_day' => '7',
  'rating_system' => 'TVPG',
  'srating_system' => 'GatoTV.com',
  'episodeOption' => '1',
  'url1' => 'https://www.gatotv.com/canal/##channel##/##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=utf-8',
  'urldate_format1' => 'Y-m-d',
  'show' => '<tr class="tbl_EPG_row.*?">(.*?)<\\/tr>',
  'start' => '<time datetime="(\\d{2}[\\.:]\\d{2})"',
  'start_format' => 'H#i',
  'stop' => '<\\/td>.*?<time datetime="(\\d{2}[\\.:]\\d{2})"',
  'stop_format' => 'H#i',
  'title' => '<div class="div_program_title_on_channel">.*?<span>(.*?)<\\/span>',
  'subtitle' => '<div class="div_episode_\\w+_on_channel">(.*?)<\\/div>||#replace#(Temporada(?:\\s*)?\\d+.*?$)##(Episodio(?:\\s*)?\\d+.*?$)||##',
  'desc' => '<\\/span>\\s*<\\/a>\\s*(?:<span class="span_is_live.*?span>)?\\s*<\\/div>(.*?)<\\/div>\\s*<\\/td>',
  'category' => '<span class="span_is_live_on_channel">(.*?)<\\/span>||#addend#,##detail##||#split#(,)',
  'showicon' => '<img src="(.*?)"||#replace#(miniatura\\/)||',
  'season' => '<div class="div_episode_\\w+_on_channel">.*?Temporada(?:\\s*)?(\\d+)',
  'episode' => '<div class="div_episode_\\w+_on_channel">.*?Episodio(?:\\s*)?(\\d+)',
  'channel_logo' => '||#add#https://imagenes.gatotv.com/logos/canales/oscuros/##cclogo##',
  'pagekey1' => '<a href="(.*?)"',
  'detail_url1' => '##pagekey1##',
  'detail_requestOption1' => '1',
  'detail_accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'detail_content_type1' => 'text/html; charset=utf-8',
  'detail_title' => '<h1 itemprop="name">(.*?)<\\/h1>',
  'detail_title_original' => 'Título en Idioma Original:.*?<span.*?>(.*?)<\\/span>||#culture#en',
  'detail_desc' => '<span id="sinopsis">Sinopsis<\\/span>(.*?)<\\/div>|>|<div itemprop="description">(.*?)<\\/div>',
  'detail_category' => 'itemprop="genre".*?>(.*?)<\\/',
  'detail_orig_language' => '<span itemprop="inLanguage".*?>(.*?)<\\/span>',
  'detail_showicon' => '<img title=" Ver Imagen \\d".*?src="(.*?)"||#replace#(miniatura\\/)||',
  'detail_production_date' => '<span itemprop="copyrightYear">(\\d+)',
  'detail_actor' => '<span itemprop="actors".*?"name">(.*?)<\\/span>',
  'detail_director' => '<span itemprop="director".*?>(.*?)<\\/span>',
  'detail_producer' => '<span itemprop="producer".*?>(.*?)<\\/span>|#|Productores Ejecutivos:(.*?)<\\/table>||#split#(\\s\\|\\s)',
  'detail_composer' => 'Música:(.*?)<\\/table>||#split#(\\s\\|\\s)',
  'detail_editor' => 'Editor:(.*?)<\\/table>||#split#(\\s\\|\\s)',
  'detail_writer' => '(?:Guión|Escritores):(.*?)<\\/table>||#split#(\\s\\|\\s)',
  'detail_adapter' => 'Cinematografía:(.*?)<\\/table>||#split#(\\s\\|\\s)',
  'detail_country' => 'Pa(?:ís|ises) de Origen:(.*?)<\\/table>||#split#(\\s\\|\\s)',
  'detail_rating' => 'itemprop="contentRating" content="(.*?)"',
  'detail_rating_icon' => 'rating\\/oscuros\\/(.*?)"||#addstart#https://imagenes.gatotv.com/rating/oscuros/',
  'detail_star_rating' => '<meta itemprop="ratingValue" content="(\\d)|#|[|/|]<meta itemprop="bestRating" content="(\\d+)',
  'detail_star_rating_icon' => '<img title="\\d\\/\\d+".*?src="(.*?)"',
  'ccurl1' => 'https://www.gatotv.com/canales_de_tv',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cccontent_type1' => 'text/html; charset=utf-8',
  'ccchannel_block' => '<tr class=" tbl_EPG_row(?:Alternate)? ">.*?<\\/tr>',
  'ccchannel_id' => '">\\s*<td>\\s*<a href="\\S+\\/canal\\/(.*?)"',
  'ccchannel_name' => '">\\s*<td>\\s*<a href="\\S+" title="(.*?)">',
  'ccchannel_logo' => '\\/oscuros\\/(.*?)"',
);
?>