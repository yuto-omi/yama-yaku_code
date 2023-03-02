let myTarget = document.querySelectorAll('.is-target'); // ...ターゲットとする対象を指定
// makeObserver(); の実行（もちろん関数名は何でも良いです）
makeObserver();
// IntersectionObserverを作成する関数
function makeObserver() {
    let myObserver;
    // IntersectionObserverのオプション設定　...3種類の値が渡せます
    let myOptions = {
        root: null,
        rootMargin: '0px 0px',
        threshold: '0'
    };

    // IntersectionObserverの作成
    myObserver = new IntersectionObserver(myIntersect, myOptions);
    // 複数の対象要素を監視
    for (let n = 0; n < myTarget.length; n++) {
        myObserver.observe(myTarget[n]);
    }
}
// 条件を満たしたら実行される関数
function myIntersect(entries, myObserver) {
    entries.forEach((entry, n) => {
        const nowElement = entry.target;
        if (entry.isIntersecting) {
            nowElement.classList.remove('is-target');
            nowElement.classList.add('is-animation');
        } else {
            // nowElement.classList.remove('is-animation');
            // nowElement.classList.add('is-target');
        }
    });
}