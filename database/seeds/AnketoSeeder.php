<?php

use App\Anketo;
use Illuminate\Database\Seeder;

class AnketoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        $anketo = new Anketo();
        $anketo->question = '私は、職場の人から仕事を認められていると思う。'; $anketo->save();

        // 2
        $anketo = new Anketo();
        $anketo->question = '職場には自分の悩みなどを相談することのできる人がいる。'; $anketo->save();

        // 3
        $anketo = new Anketo();
        $anketo->question = '聞きたくないような、自分についての話を聞くことがある。'; $anketo->save();

        // 4
        $anketo = new Anketo();
        $anketo->question = '上司や先輩に人前でおこられ不快に感じることがある。'; $anketo->save();

        // 5
        $anketo = new Anketo();
        $anketo->question = '私は職場の人から相談を受けることがある。'; $anketo->save();

        // 6
        $anketo = new Anketo();
        $anketo->question = '私は上司や先輩から嫌がらせを受けることがある。'; $anketo->save();

        // 7
        $anketo = new Anketo();
        $anketo->question = '職場には仕事で成果を上げて成長していく同僚がいる。'; $anketo->save();

        // 8
        $anketo = new Anketo();
        $anketo->question = '間接的に、自分の批判や悪口を聞いて不快に感じることがある。'; $anketo->save();

        // 9
        $anketo = new Anketo();
        $anketo->question = '私は仕事で達成感や充実感を感じることがある。'; $anketo->save();

        // 10
        $anketo = new Anketo();
        $anketo->question = '自分が良かれと思ってやったことに対して、同僚から批判されることがある。'; $anketo->save();

        // 11
        $anketo = new Anketo();
        $anketo->question = '職場は自分の能力を生かすことのできる環境である。 '; $anketo->save();

        // 12
        $anketo = new Anketo();
        $anketo->question = '自分の仕事を同僚にこころよく思われていないように感じることがある。'; $anketo->save();

        // 13
        $anketo = new Anketo();
        $anketo->question = '私は同じ思いを持った人と一緒に仕事ができている。'; $anketo->save();

        // 14
        $anketo = new Anketo();
        $anketo->question = '話しかけてもいやな顔をされるなど、私を避けている同僚がいる。'; $anketo->save();

        // 15
        $anketo = new Anketo();
        $anketo->question = '私は今の職場に満足している。'; $anketo->save();

        // 16
        $anketo = new Anketo();
        $anketo->question = '職場ではちょっとしたミスを理由に責められるなど、いやな思いをすることがある。'; $anketo->save();

        // 17
        $anketo = new Anketo();
        $anketo->question = '職場には自分を頼りにしてくれる人がいる。'; $anketo->save();

        // 18
        $anketo = new Anketo();
        $anketo->question = '上司や先輩から髪型・服装・言葉づかいなどで細かく批判されるなど、不公平なあつかいを受けることがある。'; $anketo->save();

        // 19
        $anketo = new Anketo();
        $anketo->question = '私は仕事において、感謝の気持ちを直接言われたり、手紙やメールで伝えられたりすることがある。'; $anketo->save();

        // 20
        $anketo = new Anketo();
        $anketo->question = '私はみんなが嫌がる役割を押し付けられることがある。'; $anketo->save();

        // 21
        $anketo = new Anketo();
        $anketo->question = '私は上司や先輩に分かりやすく教えてもらったり、厳しく指導してもらったりして育てられている。'; $anketo->save();

        // 22
        $anketo = new Anketo();
        $anketo->question = '私は仕事において、職場の上司を信頼している。'; $anketo->save();

        // 23
        $anketo = new Anketo();
        $anketo->question = '職場では自分の仕事が正当に評価され、満足している。'; $anketo->save();

    }
}
