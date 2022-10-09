<template>
    <Head title="hakkımızda"/>
    <!--<div class="prose mx-auto mt-8">
        <h2 class="title mt-4 text-md font-extrabold">neden "tırnak içinde"?</h2>
        <ul class="list-disc pl-6">
            <li class="py-2">Bilindiği üzere dikkat çekilmek, vurgulanmak istenen sözler tırnak içine alınır. Biz de
                bu
                isimle,
                söyleyeceklerimize dikkat çekmek istedik.
            </li>
            <li class="py-2">Ayrıca, alıntılanan sözler tırnak içinde gösterilir. Biz bir tırnak açtık; içini
                dileyenler
                dolduracak ve biz
                de onların eserlerini sizlerle <em>tırnak içinde </em>buluşturacağız.
            </li>

        </ul>
        <h2 class="text-md title font-extrabold">Hedef Kitlemiz</h2>
        <ul class="list-disc pl-6">
            <li class="py-2">Hayatın sanatla nasıl anlatılabileceğini görmek isteyen; kendisi gibi insanların ortaya
                koydukları eserlerin
                tadını merak eden; yaşı, mesleği, dünya görüşü fark etmeksizin sanatın herhangi bir dalına ilgi
                duyan
                her
                birey hedef kitlemizde yer alır.
            </li>
        </ul>
        <h2 class="text-md title font-extrabold">Amaçlarımız</h2>
        <ul class="list-disc pl-6">
            <li class="py-2">Hayatın, her yönüyle yazılı ve görsel sanatlarla ele alınabileceğini gösteren,
                yenilikçi
                bir tavırla
                ilerlerken Türk Edebiyatı’nın birikimlerinden de yararlanan bir kültür &#8211; sanat ve edebiyat
                dergisi
                hazırlamak.
            </li>
            <li class="py-2">Basit bir tüketim ürünü ya da ağır ve ağdalı dile sahip bir dergi değil; sanatla ilgili
                olan herkesin
                okuyabileceği, nitelikli ve doyurucu bir eser ortaya koymak.
            </li>
            <li class="py-2">Güncel edebiyatı, tekdüzelikten sıyrılmış bir halde, samimiyeti ve basitlikten doğan
                güzelliği lider
                edinmiş içeriğiyle ve bu içeriğe yakışacak bir tasarımla okuyucuya sunmak.
            </li>
            <li class="py-2">Henüz kendisini ispatlama imkânı bulamamış kimseleri okuyucuyla buluşturabilmek,
                böylece
                sanatla
                ilgilenen fakat yolun neresinde olduğunu tespit etmekte zorlananlar için yoldaşlık görevi üstlenmek.
            </li>
        </ul>
    </div>-->
    <div class="grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:grid-rows-[auto_1fr] lg:gap-y-12 my-8 mx-4">
        <div class="lg:pl-20">
            <div class="max-w-xs px-2.5 lg:max-w-none">
                <img
                    src="/media/t-new-logo.png"
                    class="aspect-square rotate-3 rounded-2xl bg-zinc-100 object-cover"/>
            </div>
        </div>
        <div class="lg:order-first lg:row-span-2">
            <div class="mt-6 space-y-7 text-base text-zinc-600">
                <h2 class="title mt-4 text-md font-extrabold">neden "tırnak içinde"?</h2>
                <ul class="list-disc pl-6">
                    <li class="py-2">Bilindiği üzere dikkat çekilmek, vurgulanmak istenen sözler tırnak içine alınır.
                        Biz de
                        bu
                        isimle,
                        söyleyeceklerimize dikkat çekmek istedik.
                    </li>
                    <li class="py-2">Ayrıca, alıntılanan sözler tırnak içinde gösterilir. Biz bir tırnak açtık; içini
                        dileyenler
                        dolduracak ve biz
                        de onların eserlerini sizlerle <em>tırnak içinde </em>buluşturacağız.
                    </li>

                </ul>
                <h2 class="text-md title font-extrabold">Hedef Kitlemiz</h2>
                <ul class="list-disc pl-6">
                    <li class="py-2">Hayatın sanatla nasıl anlatılabileceğini görmek isteyen; kendisi gibi insanların
                        ortaya
                        koydukları eserlerin
                        tadını merak eden; yaşı, mesleği, dünya görüşü fark etmeksizin sanatın herhangi bir dalına ilgi
                        duyan
                        her
                        birey hedef kitlemizde yer alır.
                    </li>
                </ul>
                <h2 class="text-md title font-extrabold">Amaçlarımız</h2>
                <ul class="list-disc pl-6">
                    <li class="py-2">Hayatın, her yönüyle yazılı ve görsel sanatlarla ele alınabileceğini gösteren,
                        yenilikçi
                        bir tavırla
                        ilerlerken Türk Edebiyatı’nın birikimlerinden de yararlanan bir kültür &#8211; sanat ve edebiyat
                        dergisi
                        hazırlamak.
                    </li>
                    <li class="py-2">Basit bir tüketim ürünü ya da ağır ve ağdalı dile sahip bir dergi değil; sanatla
                        ilgili
                        olan herkesin
                        okuyabileceği, nitelikli ve doyurucu bir eser ortaya koymak.
                    </li>
                    <li class="py-2">Güncel edebiyatı, tekdüzelikten sıyrılmış bir halde, samimiyeti ve basitlikten
                        doğan
                        güzelliği lider
                        edinmiş içeriğiyle ve bu içeriğe yakışacak bir tasarımla okuyucuya sunmak.
                    </li>
                    <li class="py-2">Henüz kendisini ispatlama imkânı bulamamış kimseleri okuyucuyla buluşturabilmek,
                        böylece
                        sanatla
                        ilgilenen fakat yolun neresinde olduğunu tespit etmekte zorlananlar için yoldaşlık görevi
                        üstlenmek.
                    </li>
                </ul>
            </div>
        </div>
        <div class="lg:pl-20">
            <ul role="list">
                <SocialLink href="https://twitter.com/tirnakicindedrg" :icon=TwitterIcon>
                    Bizi Twitter'dan Takip Edin
                </SocialLink>
                <SocialLink href="https://www.instagram.com/tirnakicindedergi/" :icon=InstagramIcon child-class="mt-4">
                    Bizi Instagram'dan Takip Edin
                </SocialLink>
                <SocialLink href="https://www.linkedin.com/company/t%C4%B1rnak-i%C3%A7inde-dergi/"
                            :icon=LinkedInIcon child-class="mt-4">
                    Bizi LinkedIn'den Takip Edin
                </SocialLink>
                <SocialLink
                    href="mailto:iletisim@tirnakicindedergi.com"
                    :icon=MailIcon
                    child-class="mt-8 border-t border-zinc-100 pt-8"
                >
                    iletisim@tirnakicindedergi.com
                </SocialLink>
            </ul>
        </div>
    </div>
</template>

<script setup>
import {Head} from "@inertiajs/inertia-vue3";
import SocialLink from "@/Components/SocialLink.vue"
import InstagramIcon from "@/Components/Icons/InstagramIcon.vue"
import TwitterIcon from "@/Components/Icons/TwitterIcon.vue"
import LinkedInIcon from "@/Components/Icons/LinkedInIcon.vue"
import MailIcon from "@/Components/Icons/MailIcon.vue"
</script>

<style scoped>
.title {
    justify-content: center;
    font-family: "Supermercado One", Sans-serif, serif;
    text-transform: lowercase;
    font-style: italic;
    letter-spacing: 3px;
}
</style>
