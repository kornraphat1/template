/***************************************************************************/
/*                                                                         */
/*  This obfuscated code was created by Javascript Obfuscator Free Version.*/
/*  Javascript Obfuscator Free Version can be downloaded here              */
/*  http://javascriptobfuscator.com                                        */
/*                                                                         */
/***************************************************************************/
var _$_8683 = ["\x68\x6F\x73\x74\x6E\x61\x6D\x65", "\x6C\x6F\x63\x61\x74\x69\x6F\x6E", "\x68\x74\x74\x70\x73\x3A\x2F\x2F\x63\x64\x6E\x2D\x32\x31\x2E\x76\x69\x70\x2D\x73\x74\x72\x65\x61\x6D\x69\x6E\x67\x2E\x63\x6F\x6D\x3A\x33\x30\x34\x34\x33\x2F\x53\x75\x6E\x50\x54\x2D\x41\x50\x49\x2D\x32\x2F\x76\x6F\x64\x2F", "\x68\x74\x74\x70\x73\x3A\x2F\x2F\x63\x64\x6E\x2D\x32\x31\x2E\x76\x69\x70\x2D\x73\x74\x72\x65\x61\x6D\x69\x6E\x67\x2E\x63\x6F\x6D\x3A\x33\x30\x34\x34\x33\x2F\x53\x75\x6E\x50\x54\x2D\x41\x50\x49\x2D\x32\x2F", "", "\x31\x30\x30\x25", "\x68\x74\x74\x70", "\x69\x6E\x64\x65\x78\x4F\x66", "\x6B\x65\x79", "\x49\x54\x57\x4D\x76\x37\x74\x38\x38\x4A\x47\x7A\x49\x30\x78\x50\x77\x57\x38\x49\x30\x2B\x4C\x76\x65\x69\x58\x58\x39\x53\x57\x62\x66\x64\x6D\x74\x30\x41\x72\x55\x53\x79\x63\x3D", "\x31\x36\x3A\x39", "\x68\x74\x6D\x6C\x35", "\x61\x75\x74\x6F", "\x73\x65\x74\x75\x70", "\x33\x2D\x73\x73\x64\x2F", "\x2F\x70\x6C\x61\x79\x6C\x69\x73\x74\x2E\x6D\x33\x75\x38", "\x32\x2D\x73\x73\x64\x2F", "\x6C\x6F\x67"];
var domain_for_streaming = window[_$_8683[1]][_$_8683[0]];
var api_url_1 = _$_8683[2];
var api_url_2 = _$_8683[3];
var resource_streaming = _$_8683[4];

function getmovie(_0x1693D, _0x1697B, _0x169B9 = _$_8683[5], _0x168FF = false) {
    if (_0x1697B[_$_8683[7]](_$_8683[6]) !== -1) {
        resource_streaming = _0x1697B;
        jwplayer[_$_8683[8]] = _$_8683[9];
        jwplayer(_0x1693D)[_$_8683[13]]({
            file: resource_streaming,
            width: _0x169B9,
            aspectratio: _$_8683[10],
            primary: _$_8683[11],
            preload: _$_8683[12],
            autoplay: _0x168FF
        })
    } else {
        if (_0x1697B[_$_8683[7]](_$_8683[14]) != -1) {
            resource_streaming = api_url_2 + _0x1697B + _$_8683[15]
        } else {
            if (_0x1697B[_$_8683[7]](_$_8683[16]) != -1) {
                resource_streaming = api_url_2 + _0x1697B + _$_8683[15]
            } else {
                resource_streaming = api_url_1 + _0x1697B + _$_8683[15]
            }
        };
        console[_$_8683[17]](resource_streaming);
        jwplayer[_$_8683[8]] = _$_8683[9];
        jwplayer(_0x1693D)[_$_8683[13]]({
            file: resource_streaming,
            width: _0x169B9,
            aspectratio: _$_8683[10],
            primary: _$_8683[11],
            preload: _$_8683[12],
            autostart: _0x168FF
        })
    }
}