<?php
    // 현재 예제 테스트 가능한 시작시간, 종료시간을 입력해주세요
    // 시작시간 설정 2019년 1월 1일 0시 0분 0초
        $starttime = mktime(0,0,0,1,1,2019);

        // 종료시간 설정 2019년 1월 1일 0시 59분 59초
        $endtime = mktime(0,59,59,1,1,2019);

        $nowtime = time();

        if ($nowtime >= $starttime && $nowtime <= $endtime){
            echo "현재 이벤트에 참여할 수 잇는 시간입니다.";
        }else{
            echo "이벤트 시작전이거나 종료되었습니다.";
        }
