<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'tvnz.co.nz',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-07-07',
  'rev_no' => 'R0',
  'timezone' => 'Pacific/Auckland',
  'culture' => 'en',
  'max_day' => '7',
  'rating_system' => 'OFLC',
  'episodeOption' => '1',
  'url1' => 'https://apis-edge-prod.tech.tvnz.co.nz/api/v1/web/play/epg/channels/##channel##/schedule?date=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => '*/*',
  'content_type1' => 'application/json',
  'origin_header1' => 'https://www.tvnz.co.nz',
  'urldate_format1' => 'Y-m-d',
  'show' => '({"type":"programme".*?}\\]})',
  'sort' => '"onTime":"(.*?)\\+||#replace#(-|:|T)||',
  'sortflag' => '2',
  'sortorder' => '1',
  'start' => '"onTime":"(.*?)\\+',
  'start_format' => 'Y-m-d\\TH#i#s',
  'stop' => '"offTime":"(.*?)\\+',
  'stop_format' => 'Y-m-d\\TH#i#s',
  'title' => '"title":"(.*?)"',
  'subtitle' => '"episodeName":"(.*?)"',
  'desc' => '"synopsis":"(.*?)"',
  'season' => '"seasonNumber":"(?!0)(\\d+)',
  'episode' => '"episodeNumber":"(?!0)(\\d+)',
  'channel_logo' => '||#add###cclogo##',
  'videoquality' => '"(hd)":true,||#upper#',
  'subtitles' => '"captioned":(true),',
  'rating' => '"certification":"(.*?)"|#|[| | |]"audienceAdvisory":"(.*?)"',
  'ccurl1' => 'https://apis-edge-prod.tech.tvnz.co.nz/api/v1/web/play/page/livetv',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => '*/*',
  'cccontent_type1' => 'application/json',
  'ccorigin_header1' => 'https://www.tvnz.co.nz',
  'ccchannel_block' => '{"type":"epgChannel".*?}',
  'ccchannel_id' => '\\/epg\\/channels\\/(.*?)"',
  'ccchannel_name' => '\\/epg\\/channels\\/(.*?)"',
  'ccchannel_logo' => '"src":"(.*?)"',
);
?>