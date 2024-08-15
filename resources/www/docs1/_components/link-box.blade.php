@php
    $jsonData = '{
                                    "items": {
                                    "1": {
                                    "code": "navlink",
                                    "name": "아코디언",
                                    "navlink": "/ui_components/accordion",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 1
                                    },
                                    "2": {
                                    "code": "navlink",
                                    "name": "경고창",
                                    "navlink": "/ui_components/alert",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "3": {
                                    "code": "navlink",
                                    "name": "배지",
                                    "navlink": "/ui_components/badge",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "4": {
                                    "code": "navlink",
                                    "name": "브레드크럼",
                                    "navlink": "/ui_components/breadcrumb",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "5": {
                                    "code": "navlink",
                                    "name": "버튼",
                                    "navlink": "/ui_components/button",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "6": {
                                    "code": "navlink",
                                    "name": "버튼 그룹",
                                    "navlink": "/ui_components/buttongroup",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "7": {
                                    "code": "navlink",
                                    "name": "카드",
                                    "navlink": "/ui_components/card",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "8": {
                                    "code": "navlink",
                                    "name": "캐러셀",
                                    "navlink": "/ui_components/carousel",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "9": {
                                    "code": "navlink",
                                    "name": "닫기 버튼",
                                    "navlink": "/ui_components/closebutton",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "10": {
                                    "code": "navlink",
                                    "name": "콜랩스",
                                    "navlink": "/ui_components/collapse",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "11": {
                                    "code": "navlink",
                                    "name": "드롭다운",
                                    "navlink": "/ui_components/dropdown",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "12": {
                                    "code": "navlink",
                                    "name": "목록 그룹",
                                    "navlink": "/ui_components/listgroup",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "13": {
                                    "code": "navlink",
                                    "name": "모달",
                                    "navlink": "/ui_components/modal",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "14": {
                                    "code": "navlink",
                                    "name": "내비게이션 바",
                                    "navlink": "/ui_components/navbar",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "15": {
                                    "code": "navlink",
                                    "name": "내비게이션 & 탭",
                                    "navlink": "/ui_components/navstabs",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "16": {
                                    "code": "navlink",
                                    "name": "오프캔버스",
                                    "navlink": "/ui_components/offcanvas",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "17": {
                                    "code": "navlink",
                                    "name": "페이지네이션",
                                    "navlink": "/ui_components/pagination",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "18": {
                                    "code": "navlink",
                                    "name": "플레이스홀더",
                                    "navlink": "/ui_components/placeholers",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "19": {
                                    "code": "navlink",
                                    "name": "팝오버",
                                    "navlink": "/ui_components/popovers",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "20": {
                                    "code": "navlink",
                                    "name": "프로그레스",
                                    "navlink": "/ui_components/progress",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "21": {
                                    "code": "navlink",
                                    "name": "스크롤스파이",
                                    "navlink": "/ui_components/scrollspy",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "22": {
                                    "code": "navlink",
                                    "name": "스피너",
                                    "navlink": "/ui_components/spinners",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "23": {
                                    "code": "navlink",
                                    "name": "토스트",
                                    "navlink": "/ui_components/toasts",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    },
                                    "24": {
                                    "code": "navlink",
                                    "name": "툴팁",
                                    "navlink": "/ui_components/tooltips",
                                    "ref": 0,
                                    "level": 1,
                                    "id": 2
                                    }
                                    }

                                    }';

    $items = json_decode($jsonData, true)['items'];
@endphp

<h1 class="font-bold text-center">Components</h1>


<div class="px-4 mx-auto max-w-7xl lg:px-4 lg:text-center">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-3">            
    @foreach($items as $item)
        <a href="{{$item['navlink']}}" class="h-64 bg-white rounded-lg border border-gray-100 hover:border-white hover:shadow-lg no-underline text-black">
            <div class="bg-gray-50 h-12 rounded-t-md py-2.5 px-4 flex justify-between items-center border-b border-gray-200">
                <span class="font-bold">{{$item['name']}}</span>
                <span>ㅁ</span>
            </div>
            <div class="flex justify-center items-center h-52">
                <div class="relative h-4/6 dark:hidden w-56">
                    <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">

                    </span>
                </div>
            </div>
        </a>
    @endforeach
    </div>
</div>