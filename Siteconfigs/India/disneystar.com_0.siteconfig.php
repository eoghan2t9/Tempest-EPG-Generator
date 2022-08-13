<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'disneystar.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-08-09',
  'rev_no' => 'R0',
  'remarks' => 'Disable Detail Page for fast grabbing since data is almost same except production date and desc',
  'timezone' => 'Asia/Kolkata',
  'culture' => 'hi',
  'max_day' => '7',
  'url1' => 'https://www.disneystar.com/umbraco/api/startvguideproxy/GetTvGuideSchedule',
  'requestOption1' => '2',
  'post_data1' => '{\'Channels\':\'##xmltv_id##\',\'Start\':\'##urldate1##0000\'}',
  'accept_header1' => '*/*',
  'content_type1' => 'application/json; charset=UTF-8',
  'host_header1' => 'www.disneystar.com',
  'origin_header1' => 'https://www.disneystar.com',
  'XMLHttpRequest1' => 'on',
  'urldate_format1' => 'Ymd',
  'show' => '"channelid\\\\":\\\\"##channel##\\\\".*?"programme\\\\":\\[.*?(?:{)(.*?)(?:}).*?\\]',
  'start' => '"start":"(.*?)"',
  'start_format' => 'YmdHi',
  'stop' => '"stop":"(.*?)"',
  'stop_format' => 'YmdHi',
  'title' => '"title":"(.*?)"',
  'subtitle' => '"episodeshorttitle":"(.*?)"',
  'desc' => '"desc":"(.*?)","',
  'category' => '"genre":"(.*?)"|#|"subgenre":"(.*?)"',
  'language' => '"languagename":"(.*?)"',
  'showicon' => '"programmeurl":"(.*?)"',
  'channel_logo' => '"channelid\\\\":\\\\"##channel##\\\\",\\\\"channellogourl\\\\":\\\\"(.*?)\\\\"',
  'pagekey1' => '"programmeid":"(\\d+)',
  'detail_url1' => 'https://www.disneystar.com/umbraco/api/startvguideproxy/GetProgramDetails',
  'detail_requestOption1' => '2',
  'detail_post_data1' => '{\'pid\':\'##pagekey1##\',\'cid\':\'##channel##\',\'start\':\'##showtime#YmdHi#\',\'chnlName\':\'##xmltv_id##\'}',
  'detail_accept_header1' => '*/*',
  'detail_content_type1' => 'application/json; charset=UTF-8',
  'detail_host_header1' => 'www.disneystar.com',
  'detail_origin_header1' => 'https://www.disneystar.com',
  'detail_XMLHttpRequest1' => 'on',
  'detail_desc' => '"synopsis":"(.*?)"}',
  'detail_production_date' => '"productionyear":"(\\d{4})',
  'ccurl1' => 'https://www.disneystar.com/umbraco/api/startvguideproxy/GetChannelResult',
  'ccrequestOption1' => '2',
  'ccpost_data1' => '{\'Genre\':\'All Channels\'}',
  'ccaccept_header1' => '*/*',
  'cccontent_type1' => 'application/json; charset=UTF-8',
  'cchost_header1' => 'www.disneystar.com',
  'ccorigin_header1' => 'https://www.disneystar.com',
  'ccgrabber_1' => 'on',
  'ccgpattern_1' => '\\\\"channelnames\\\\": \\\\"(.*?)\\\\"',
  'ccurl2' => 'https://www.disneystar.com/umbraco/api/startvguideproxy/GetTvGuideSchedule',
  'ccrequestOption2' => '2',
  'ccpost_data2' => '{\'Channels\':\'##grabber_1##\',\'Start\':\'##urldate2##0000\'}',
  'ccaccept_header2' => '*/*',
  'cccontent_type2' => 'application/json; charset=UTF-8',
  'cchost_header2' => 'www.disneystar.com',
  'ccorigin_header2' => 'https://www.disneystar.com',
  'ccXMLHttpRequest2' => 'on',
  'ccurldate_format2' => 'Ymd',
  'ccchannel_block' => '{\\\\"id\\\\".*?"programme\\\\":',
  'ccchannel_id' => '"channelid":"(\\d+)',
  'ccchannel_name' => '"channeldisplayname":"(.*?)"',
);
?>