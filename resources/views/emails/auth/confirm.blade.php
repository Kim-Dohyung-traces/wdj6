views -> emails -> auth -> 예쁘게 수정

{{ $user->name }}님, 환영합니다.
가입 확인을 위해 브라우저에서 다음 주소를 열어 주세요

<a href = "{{ route('users.confirm', $user->confirm_code) }}">{{ route('users.confirm', $user->confirm_code) }}</a>
