<?php
namespace Services\Utils;

class CurlRequest {
	
	public function getRequest($url) {
		
		// Sample Response
		//return '{"titles":[{"titleId":"http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/22732840195","title":"HERO","titleLocalized":{},"titleCredits":[],"friendlyTitle4Url":"hero","guid":"FrndMsWB9F10tSzC7VlmQINwzE4q9XwH","scheme":"urn:peg:layoutDskMoviesPage","layoutOrder":"0","pegModuleUrl":"http://feed.entertainment.tv.theplatform.eu/f/hGKjSC/peg_dev_dynamic2/24706088272,25748520084,25748520034?form=cjson&byMediaAvailabilityState=available&fields=id,year,title,tagIds,tags,peg%24arAgeRating,media.content.format,media.content.assetTypes,media.content.duration,media.content.releases.url,media.content.streamingUrl,thumbnails&thumbnailFilter=thumb-613x1536","pegModuleUrlType":"Hero","pegModuleDescription":"{ \"hasMultipleImages\": true }","pegRelatedLists":"http://feed.entertainment.tv.theplatform.eu/f/hGKjSC/peg_dev_layout/22863400412,22863400413,22733352057,22733352064,26150952014?form=cjson","pegImageType":"DMHE","pegGenreType":"","layoutTitles":{"titles":[{"titleId":"http://data.entertainment.tv.theplatform.eu/entertainment/data/ProgramAvailability/25748520084","title":"Signs","titleCredits":[],"tagIds":["http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/22636072444"],"tags":[{"tagTitle":"Movies","tagScheme":"urn:peg:category"}],"year":2002,"media":[{"availableDate":null,"content":[{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/l9PAS2c4cAgN"}],"duration":591.909,"format":"M3U","assetTypes":["hls_primetime_aaxs"],"streamingUrl":"http://dev-cdn-lb.parsifalentertainment.com/CP04/SIGNSY2002M/SIGNSY2002M.m3u8?faxs=1"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/wP7qj6mI37xk"}],"duration":0.0,"format":"Filmstrip","assetTypes":["filmstrip"],"streamingUrl":"http://dev-img-cdn-lb.parsifalentertainment.com/CP04/SIGNSY2002M/SIGNSY2002M.fs"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/uwOGuTP5urU1"}],"duration":0.0,"format":"MPEG-DASH","assetTypes":["video","dash_widevine_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/SIGNSY2002M/DRM/38d1c9f843e4250e277f8fc4e22d5e011622219b/38d1c9f843e4250e277f8fc4e22d5e011622219b.ism/38d1c9f843e4250e277f8fc4e22d5e011622219b.mpd"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/SuY5b5iy_9a4"}],"duration":0.0,"format":"MPEG-DASH","assetTypes":["video","dash_primetime_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/SIGNSY2002M/DRM/38d1c9f843e4250e277f8fc4e22d5e011622219b/38d1c9f843e4250e277f8fc4e22d5e011622219b.ism/38d1c9f843e4250e277f8fc4e22d5e011622219b.mpd"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/wpXQIxXU2RZb"}],"duration":0.0,"format":"M3U","assetTypes":["video","hls_primetime_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/SIGNSY2002M/DRM/38d1c9f843e4250e277f8fc4e22d5e011622219b/38d1c9f843e4250e277f8fc4e22d5e011622219b.ism/38d1c9f843e4250e277f8fc4e22d5e011622219b.m3u8"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/ZxnxtBE1efrD"}],"duration":0.0,"format":"MPEG-DASH","assetTypes":["video","dash_playready_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/SIGNSY2002M/DRM/38d1c9f843e4250e277f8fc4e22d5e011622219b/38d1c9f843e4250e277f8fc4e22d5e011622219b.ism/38d1c9f843e4250e277f8fc4e22d5e011622219b.mpd"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/iMxb3l2IWUsX"}],"duration":0.0,"format":"ISM","assetTypes":["video","hss_playready_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/SIGNSY2002M/DRM/38d1c9f843e4250e277f8fc4e22d5e011622219b/38d1c9f843e4250e277f8fc4e22d5e011622219b.ism/Manifest"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/_Ewx5M8EMAiG"}],"duration":0.0,"format":"F4M","assetTypes":["video","hds_primetime_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/SIGNSY2002M/DRM/38d1c9f843e4250e277f8fc4e22d5e011622219b/38d1c9f843e4250e277f8fc4e22d5e011622219b.ism/38d1c9f843e4250e277f8fc4e22d5e011622219b.f4m"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/4kFvYUNjM8z_"}],"duration":0.0,"format":"M3U","assetTypes":["video","hls_fairplay_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/SIGNSY2002M/DRM/38d1c9f843e4250e277f8fc4e22d5e011622219b/38d1c9f843e4250e277f8fc4e22d5e011622219b_fairplay.ism/38d1c9f843e4250e277f8fc4e22d5e011622219b_fairplay.m3u8"}]}],"arAgeRating":"18","friendlyTitle4Url":"signs","thumbnails":{"thumb-613x1536":{"title":"SIGNSY2002M-1536x613-DMHE.jpg","height":613,"url":"http://dev-img-cdn-lb.parsifalentertainment.com/CP04/SIGNSY2002M/SIGNSY2002M-1536x613-DMHE.jpg","width":1536,"assetTypes":["hero_main_1536x613"]}}},{"titleId":"http://data.entertainment.tv.theplatform.eu/entertainment/data/ProgramAvailability/24706088272","title":"How to Train Your Dragon","titleCredits":[],"tagIds":["http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/22636072444"],"tags":[{"tagTitle":"Movies","tagScheme":"urn:peg:category"}],"year":2010,"media":[{"availableDate":null,"content":[{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/RTIce2v9ceOl"}],"duration":5338.727,"format":"M3U","assetTypes":["hls_primetime_aaxs"],"streamingUrl":"http://dev-cdn-lb.parsifalentertainment.com/CP04/HOWTOTRAINYOURDRAGONY2010M/HOWTOTRAINYOURDRAGONY2010M.m3u8?faxs=1"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/JQWiikWGB5BG"}],"duration":113.636,"format":"M3U","assetTypes":["hls_primetime_t01_movie"],"streamingUrl":"http://dev-cdn-lb.parsifalentertainment.com/CP04/HOWTOTRAINYOURDRAGONY2010M/HOWTOTRAINYOURDRAGONY2010MTRAILER01/HOWTOTRAINYOURDRAGONY2010MTRAILER01.m3u8?faxs=1"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/eyC6TmoZsPAP"}],"duration":0.0,"format":"Filmstrip","assetTypes":["filmstrip"],"streamingUrl":"http://dev-img-cdn-lb.parsifalentertainment.com/CP04/HOWTOTRAINYOURDRAGONY2010M/HOWTOTRAINYOURDRAGONY2010M.fs"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/HF5R8kQZJjp8"}],"duration":0.0,"format":"MPEG-DASH","assetTypes":["video","dash_t01_movie_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/HOWTOTRAINYOURDRAGONY2010M/NoDRMMovieTrailers/c03306395f4cd7412e5d58a0669b12483dc640e2/c03306395f4cd7412e5d58a0669b12483dc640e2.ism/c03306395f4cd7412e5d58a0669b12483dc640e2.mpd"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/F25NFylS_Whm"}],"duration":0.0,"format":"ISM","assetTypes":["video","hss_t01_movie_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/HOWTOTRAINYOURDRAGONY2010M/NoDRMMovieTrailers/c03306395f4cd7412e5d58a0669b12483dc640e2/c03306395f4cd7412e5d58a0669b12483dc640e2.ism/Manifest"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/RqnuXC7AtHh7"}],"duration":0.0,"format":"DFXP","assetTypes":["dfxp_ar_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/HOWTOTRAINYOURDRAGONY2010M/NoDRMMovieTrailers/c03306395f4cd7412e5d58a0669b12483dc640e2/HOWTOTRAINYOURDRAGONY2010MTRAILER01.xml"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/2DkwRy2Ik2_J"}],"duration":0.0,"format":"M3U","assetTypes":["video","hls_t01_movie_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/HOWTOTRAINYOURDRAGONY2010M/NoDRMMovieTrailers/c03306395f4cd7412e5d58a0669b12483dc640e2/c03306395f4cd7412e5d58a0669b12483dc640e2.ism/c03306395f4cd7412e5d58a0669b12483dc640e2.m3u8"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/Wt95BHLpTN8J"}],"duration":0.0,"format":"F4M","assetTypes":["video","hds_t01_movie_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/HOWTOTRAINYOURDRAGONY2010M/NoDRMMovieTrailers/c03306395f4cd7412e5d58a0669b12483dc640e2/c03306395f4cd7412e5d58a0669b12483dc640e2.ism/c03306395f4cd7412e5d58a0669b12483dc640e2.f4m"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/xkXxD_zzTZhH"}],"duration":0.0,"format":"MPEG-DASH","assetTypes":["video","dash_playready_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/HOWTOTRAINYOURDRAGONY2010M/DRM/e42690b960a588a3bb81e10b294afd19ca974173/e42690b960a588a3bb81e10b294afd19ca974173.ism/e42690b960a588a3bb81e10b294afd19ca974173.mpd"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/UoxsNPv21ZLQ"}],"duration":0.0,"format":"MPEG-DASH","assetTypes":["video","dash_widevine_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/HOWTOTRAINYOURDRAGONY2010M/DRM/e42690b960a588a3bb81e10b294afd19ca974173/e42690b960a588a3bb81e10b294afd19ca974173.ism/e42690b960a588a3bb81e10b294afd19ca974173.mpd"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/fLys1zC28UN_"}],"duration":0.0,"format":"ISM","assetTypes":["video","hss_playready_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/HOWTOTRAINYOURDRAGONY2010M/DRM/e42690b960a588a3bb81e10b294afd19ca974173/e42690b960a588a3bb81e10b294afd19ca974173.ism/Manifest"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/h1_xTWw49eUu"}],"duration":0.0,"format":"F4M","assetTypes":["video","hds_primetime_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/HOWTOTRAINYOURDRAGONY2010M/DRM/e42690b960a588a3bb81e10b294afd19ca974173/e42690b960a588a3bb81e10b294afd19ca974173.ism/e42690b960a588a3bb81e10b294afd19ca974173.f4m"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/Dr9E8uKAuxVg"}],"duration":0.0,"format":"DFXP","assetTypes":["dfxp_ar_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/HOWTOTRAINYOURDRAGONY2010M/DRM/e42690b960a588a3bb81e10b294afd19ca974173/HOWTOTRAINYOURDRAGONY2010M.xml"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/suqHb5I_oy3H"}],"duration":0.0,"format":"MPEG-DASH","assetTypes":["video","dash_primetime_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/HOWTOTRAINYOURDRAGONY2010M/DRM/e42690b960a588a3bb81e10b294afd19ca974173/e42690b960a588a3bb81e10b294afd19ca974173.ism/e42690b960a588a3bb81e10b294afd19ca974173.mpd"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/mLH_kh8wIr23"}],"duration":0.0,"format":"M3U","assetTypes":["video","hls_primetime_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/HOWTOTRAINYOURDRAGONY2010M/DRM/e42690b960a588a3bb81e10b294afd19ca974173/e42690b960a588a3bb81e10b294afd19ca974173.ism/e42690b960a588a3bb81e10b294afd19ca974173.m3u8"},{"releases":[{"url":"http://link.theplatform.eu/s/hGKjSC/30_n_leYayRm"}],"duration":0.0,"format":"M3U","assetTypes":["video","hls_fairplay_vu"],"streamingUrl":"http://dev-jit-cdn-lb.starzplayarabia.com/JIT/cp04/HOWTOTRAINYOURDRAGONY2010M/DRM/e42690b960a588a3bb81e10b294afd19ca974173/e42690b960a588a3bb81e10b294afd19ca974173_fairplay.ism/e42690b960a588a3bb81e10b294afd19ca974173_fairplay.m3u8"}]}],"arAgeRating":"7","friendlyTitle4Url":"how-to-train-your-dragon","thumbnails":{"thumb-613x1536":{"title":"HOWTOTRAINYOURDRAGONY2010M-1536x613-DMHE.jpg","height":613,"url":"http://dev-img-cdn-lb.parsifalentertainment.com/CP04/HOWTOTRAINYOURDRAGONY2010M/HOWTOTRAINYOURDRAGONY2010M-1536x613-DMHE.jpg","width":1536,"assetTypes":["hero_main_1536x613"]}}}]}},{"titleId":"http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/22863400412","title":"MOST WATCHED MOVIES","titleLocalized":{},"titleCredits":[],"friendlyTitle4Url":"most-watched-movies","guid":"11ZACaM5Fcx1vS_pd3D8L_SIABOsCc_4","scheme":"urn:peg:layoutDskMoviesPage","layoutOrder":"1","pegModuleUrl":"http://feed.entertainment.tv.theplatform.eu/f/hGKjSC/peg_dev_dynamic2/25766952274,25748520107,24706088272?form=cjson&byMediaAvailabilityState=available&fields=id,title,media.content.duration,description,shortDescription,year,tagIds,peg%24arAgeRating,tags,thumbnails&thumbnailFilter=thumb-334x234,thumb-677x474","pegModuleUrlType":"List5Items","pegModuleDescription":"{ \"hasMultipleImages\": true }","pegImageType":"PST","pegGenreType":"","layoutTitles":{"titles":[{"titleId":"http://data.entertainment.tv.theplatform.eu/entertainment/data/ProgramAvailability/25766952274","title":"The Affair","shortDescription":"A provocative drama that explores the emotional and psychological effects of an extramarital affair from a male and a female perspective.","titleCredits":[],"tagIds":["http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/22636072445"],"tags":[{"tagTitle":"Series","tagScheme":"urn:peg:category"}],"year":2014,"media":[{"availableDate":null,"content":[{"duration":591.909},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0}]},{"availableDate":null,"content":[{"duration":591.909},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0}]},{"availableDate":null,"content":[{"duration":591.909},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0}]},{"availableDate":null,"content":[{"duration":591.909},{"duration":0.0}]},{"availableDate":null,"content":[{"duration":591.909},{"duration":0.0}]},{"availableDate":null,"content":[{"duration":591.909},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0}]},{"availableDate":null,"content":[{"duration":591.909},{"duration":0.0}]},{"availableDate":null,"content":[{"duration":591.909},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0}]},{"availableDate":null,"content":[{"duration":591.909},{"duration":0.0}]},{"availableDate":null,"content":[{"duration":591.909},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0}]}],"arAgeRating":"18","friendlyTitle4Url":"the-affair","thumbnails":{"thumb-677x474":{"title":"THEAFFAIRY2014S01E007-474x677-PST.jpg","height":677,"url":"http://dev-img-cdn-lb.parsifalentertainment.com/CP04/THEAFFAIRY2014S01E007/THEAFFAIRY2014S01E007-474x677-PST.jpg","width":474,"assetTypes":["dsk_tab_poster_474x677"]}}},{"titleId":"http://data.entertainment.tv.theplatform.eu/entertainment/data/ProgramAvailability/25748520107","title":"Seabiscuit","shortDescription":"Tobey Maguire, Jeff Bridges and Chris Cooper star in the critically acclaimed and audience-pleasing Seabiscuit.","titleCredits":[],"tagIds":["http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/22636072444"],"tags":[{"tagTitle":"Movies","tagScheme":"urn:peg:category"}],"year":2003,"media":[{"availableDate":null,"content":[{"duration":591.909},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0}]}],"arAgeRating":"15","friendlyTitle4Url":"seabiscuit","thumbnails":{"thumb-677x474":{"title":"SEABISCUITY2003M-474x677-PST.jpg","height":677,"url":"http://dev-img-cdn-lb.parsifalentertainment.com/CP04/SEABISCUITY2003M/SEABISCUITY2003M-474x677-PST.jpg","width":474,"assetTypes":["dsk_tab_poster_474x677"]}}},{"titleId":"http://data.entertainment.tv.theplatform.eu/entertainment/data/ProgramAvailability/24706088272","title":"How to Train Your Dragon","shortDescription":"Hiccup is a young Viking who defies convention when he befriends one of his deadliest foes — a ferocious dragon he calls Toothless.","titleCredits":[],"tagIds":["http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/22636072444"],"tags":[{"tagTitle":"Movies","tagScheme":"urn:peg:category"}],"year":2010,"media":[{"availableDate":null,"content":[{"duration":5338.727},{"duration":113.636},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0}]}],"arAgeRating":"7","friendlyTitle4Url":"how-to-train-your-dragon","thumbnails":{"thumb-677x474":{"title":"HOWTOTRAINYOURDRAGONY2010M-474x677-PST.jpg","height":677,"url":"http://dev-img-cdn-lb.parsifalentertainment.com/CP04/HOWTOTRAINYOURDRAGONY2010M/HOWTOTRAINYOURDRAGONY2010M-474x677-PST.jpg","width":474,"assetTypes":["dsk_tab_poster_474x677"]}}}]}},{"titleId":"http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/28069928123","title":"test 626","titleLocalized":{},"titleCredits":[],"friendlyTitle4Url":"test-626","guid":"zqxn2jVdQxW6XTvJ4jzVQMn_QzTBD8J0","scheme":"urn:peg:layoutDskMoviesPage","layoutOrder":"2","pegModuleUrl":"http://feed.entertainment.tv.theplatform.eu/f/hGKjSC/peg_dev_dynamic2/26314280152,23752232306?form=cjson&byMediaAvailabilityState=available&fields=id,title,media.content.duration,description,shortDescription,year,tagIds,peg%24arAgeRating,tags,thumbnails&thumbnailFilter=thumb-334x234,thumb-677x474","pegModuleUrlType":"List3Items","pegModuleDescription":"{\"hasMultipleImages\":true}","pegImageType":"PST","pegGenreType":"","layoutTitles":{"titles":[{"titleId":"http://data.entertainment.tv.theplatform.eu/entertainment/data/ProgramAvailability/26314280152","title":"2001: A Space Odyssey","shortDescription":"Humanity finds a mysterious object buried beneath the Lunar surface and, with the intelligent computer H.A.L. 9000, sets off on a quest.","titleCredits":[],"tagIds":["http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/22636072444","http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/29097000097","http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/29097000100"],"tags":[{"tagTitle":"Movies","tagScheme":"urn:peg:category"},{"tagTitle":"Sci-Fi & Fantasy","tagScheme":"urn:peg:genre"},{"tagTitle":"Drama","tagScheme":"urn:peg:genre"}],"year":1968,"media":[{"availableDate":null,"content":[{"duration":81.272},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0}]}],"arAgeRating":"18","friendlyTitle4Url":"2001-a-space-odyssey","thumbnails":{"thumb-677x474":{"title":"2001ASPACEODYSSEYY1968M-474x677-PST.jpg","height":677,"url":"http://dev-img-cdn-lb.parsifalentertainment.com/CP04/2001ASPACEODYSSEYY1968M/2001ASPACEODYSSEYY1968M-474x677-PST.jpg","width":474,"assetTypes":["dsk_tab_poster_474x677"]}}}]}},{"titleId":"http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/30525992143","title":"STAR-564","titleLocalized":{},"titleCredits":[],"friendlyTitle4Url":"star-564","guid":"9aoNkI_0cfIniC_3rybBFR99vjNxMZJL","scheme":"urn:peg:layoutDskMoviesPage","layoutOrder":"3","pegModuleUrl":"http://feed.entertainment.tv.theplatform.eu/f/hGKjSC/peg_dev_dynamic2/26313768073,26313768082,26314280229?form=cjson&byMediaAvailabilityState=available&fields=id,title,media.content.duration,description,shortDescription,year,tagIds,peg%24arAgeRating,tags,thumbnails&thumbnailFilter=thumb-334x234,thumb-677x474","pegModuleUrlType":"List3Items","pegModuleDescription":"{ \"hasMultipleImages\": true }","pegImageType":"PST","pegGenreType":"","layoutTitles":{"titles":[{"titleId":"http://data.entertainment.tv.theplatform.eu/entertainment/data/ProgramAvailability/26313768082","title":"Constantine","shortDescription":"Constantine tells the story of irreverent supernatural detective John Constantine, who has literally been to hell and back.","titleCredits":[],"tagIds":["http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/22636072444"],"tags":[{"tagTitle":"Movies","tagScheme":"urn:peg:category"}],"year":2005,"media":[{"availableDate":null,"content":[{"duration":81.272},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0}]}],"arAgeRating":"18","friendlyTitle4Url":"constantine","thumbnails":{"thumb-677x474":{"title":"CONSTANTINEY2005M-474x677-PST.jpg","height":677,"url":"http://dev-img-cdn-lb.parsifalentertainment.com/CP04/CONSTANTINEY2005M/CONSTANTINEY2005M-474x677-PST.jpg","width":474,"assetTypes":["dsk_tab_poster_474x677"]}}},{"titleId":"http://data.entertainment.tv.theplatform.eu/entertainment/data/ProgramAvailability/26313768073","title":"Dumb and Dumber","description":"","shortDescription":"Classic comedy about the cross-country adventures of two good-hearted but incredibly stupid friends.","titleCredits":[],"tagIds":["http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/22636072444"],"tags":[{"tagTitle":"Movies","tagScheme":"urn:peg:category"}],"year":1994,"media":[{"availableDate":null,"content":[{"duration":81.272},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0}]}],"arAgeRating":"18","friendlyTitle4Url":"dumb-and-dumber","thumbnails":{"thumb-677x474":{"title":"DUMBANDDUMBERY1994M-474x677-PST.jpg","height":677,"url":"http://dev-img-cdn-lb.parsifalentertainment.com/CP04/DUMBANDDUMBERY1994M/DUMBANDDUMBERY1994M-474x677-PST.jpg","width":474,"assetTypes":["dsk_tab_poster_474x677"]}}},{"titleId":"http://data.entertainment.tv.theplatform.eu/entertainment/data/ProgramAvailability/26314280229","title":"Texas Chainsaw Massacre: The Beginning","description":"","shortDescription":"Prequel to the famous horror film; two young men are spending a last weekend with their girlfriends before being sent to war.","titleCredits":[],"tagIds":["http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/22636072444"],"tags":[{"tagTitle":"Movies","tagScheme":"urn:peg:category"}],"year":2006,"media":[{"availableDate":null,"content":[{"duration":81.272},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0},{"duration":0.0}]}],"arAgeRating":"18","friendlyTitle4Url":"texas-chainsaw-massacre-the-beginning","thumbnails":{"thumb-677x474":{"title":"TEXASCHAINSAWMASSACRETHEBEGINNINGY2006M-474x677-PST.jpg","height":677,"url":"http://dev-img-cdn-lb.parsifalentertainment.com/CP04/TEXASCHAINSAWMASSACRETHEBEGINNINGY2006M/TEXASCHAINSAWMASSACRETHEBEGINNINGY2006M-474x677-PST.jpg","width":474,"assetTypes":["dsk_tab_poster_474x677"]}}}]}},{"titleId":"http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/22733352064","title":"CATALOGUE","titleLocalized":{},"titleCredits":[],"friendlyTitle4Url":"catalogue","guid":"hYsQYE6l_T8AUzJ1z0L_ok860SSpE0QV","scheme":"urn:peg:layoutDskMoviesPage","layoutOrder":"4","pegModuleUrl":"http://feed.entertainment.tv.theplatform.eu/f/hGKjSC/peg_dev_CatalogueMovies?form=cjson&fields=id,title,titleLocalized,year,peg$arAgeRating,description,shortDescription,shortDescriptionLocalized,tagIds,tags,thumbnails&thumbnailFilter=thumb-334x234,thumb-677x474&byCustomValue={availableInSection}{All|NotKids}&byMediaAvailabilityState=available&byTagIds=22636072444&sort=:priorityLevel","pegModuleUrlType":"Catalogue","pegModuleDescription":"{ \"hasMultipleImages\": false }","pegModuleUrlTitleAdded":"http://feed.entertainment.tv.theplatform.eu/f/hGKjSC/peg_dev_CataloguesProgram?form=cjson&fields=id,title,titleLocalized,year,peg$arAgeRating,description,shortDescription,shortDescriptionLocalized,tagIds,tags,thumbnails&thumbnailFilter=thumb-334x234,thumb-677x474&byCustomValue={availableInSection}{All|NotKids}&byMediaAvailabilityState=available&byTagIds=22636072444","pegImageType":"PST","pegGenreType":""},{"titleId":"http://data.entertainment.tv.theplatform.eu/entertainment/data/Tag/31871016436","title":"Series Page","titleLocalized":{},"titleCredits":[],"friendlyTitle4Url":"series-page","guid":"3giqbkQx_f0wJNwy4JEJdRn2mfdwteKP","scheme":"urn:peg:layoutDskMoviesPage","layoutOrder":"5","pegModuleUrl":"http://feed.entertainment.tv.theplatform.eu/f/qaJAph/peg_mena_paf_all/[ids_filter]?form=cjson&byMediaAvailabilityState=available&fields=id,title,media.content.duration,description,shortDescription,year,tagIds,peg%24arAgeRating,tags,thumbnails&thumbnailFilter=thumb-677x474&byApproved=false","pegModuleUrlType":"List5Items","pegModuleDescription":"{ \"hasMultipleImages\": true }","pegImageType":"PST","pegGenreType":""}]}';
		
		// Live Response
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
		$response = curl_exec($ch);
		
		curl_close($ch);
		return $response;
    }
	
}
