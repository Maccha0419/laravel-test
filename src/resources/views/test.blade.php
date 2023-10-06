        <div class="confirm__content">
            <form class="form" action="/contacts" method="post"><!-- POST メソッドで/contacts/confirmにアクセス -->
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                    </div>
                    <div class="form__group-content">
                        <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly/>
                        <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly/>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title__gender">
                        <span class="form__label--item">性別</span>
                    </div>
                    <div class="form__group-content">
                        <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly/>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                    </div>
                    <div class="form__group-content">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">郵便番号</span>
                    </div>
                    <div class="form__group-content">
                        <input type="text" name="postcode" value="{{ $contact['postcode'] }}" readonly/>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                    </div>
                    <div class="form__group-content">
                        <input type="text" name="address" value="{{ $contact['address'] }}" readonly/>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <input type="text" name="building_name" value="{{ $contact['building_name'] }}" readonly/>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">ご意見</span>
                    </div>
                    <div class="form__group-content">
                        <input type="text" name="opinion" value="{{ $contact['opinion'] }}" readonly/>
                    </div>
                </div>

                <div class="form__button-back">
                    <button class="form__button-submit" type="submit">送信</button>
                </div>
                <button class="form__button-fix" type="submit" name="back" >修正する</button>
            </form>
        </div>