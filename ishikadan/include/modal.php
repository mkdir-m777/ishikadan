        <!-- モーダル -->
        <section class="modal">
            <div class="modal-mask"></div>
            <div class="inner modal-inner">
                <div class="modal-warp">
                    <div class="modal-title">
                        <p>宿泊予約</p>
                    </div>
                    <form action="">
                        <dl class="modal-data-list">
                            <div class="modal-data-warp">
                                <dt>お名前</dt>
                                <input type="text" placeholder=" 例：石井正悟">
                            </div>

                            <div class="modal-data-warp">
                                <dt>メールアドレス</dt>
                                <input type="text" placeholder=" 例：Example@example.com">
                            </div>

                            <div class="modal-data-warp">
                                <dt>希望プラン（空いているプランのみ表示されます）</dt>

                                <select name="plans" id="plan">
                                    <option value="">プランを選択してください</option>
                                    <option value="plan1">①【期間限定】海辺の四季旬彩、贅沢美味懐石プラン
                                    </option>
                                    <option value="plan2">②平日に優雅に楽しむ、特別宿泊プラン
                                    </option>
                                    <option value="plan3">③絶景貸切露天と個室会席を満喫できるファミリープラン
                                    </option>
                                </select>
                            </div>

                            <div class="modal-data-warp">
                                <dt>日時選択</dt>
                                <input type="text" name="datepicker" id="js-datepicker" placeholder=" 日時を選択してください">
                            </div>

                            <div class="data-warp">
                                <input class="submit-btn" type="submit" value="送信">
                            </div>
                        </dl>
                    </form>
                </div>
            </div>
        </section>

