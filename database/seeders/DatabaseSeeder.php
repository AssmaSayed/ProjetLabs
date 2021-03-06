<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\ContactContactUs;
use App\Models\ContactPlaceholder;
use App\Models\HomeAboutContant;
use App\Models\HomeCardSection;
use App\Models\HomeCarousel;
use App\Models\HomeCarouselIntro;
use App\Models\HomePromotion;
use App\Models\HomeSection;
use App\Models\HomeService;
use App\Models\HomeTestimonial;
use App\Models\HomeTitre;
use App\Models\HomeTitreSpan;
use App\Models\Service;
use App\Models\ServicesFeature;
use App\Models\ServicesFeatureImg;
use App\Models\ServicesServicesCard;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //user
           RoleSeeder::class,
           FonctionSeeder::class,
           UserSeeder::class,
           //pages
           BlogSeeder::class,
           ContactSeeder::class,
           ServiceSeeder::class,
           //partials 
           NewsletterSeeder::class,
           MapSeeder::class,
           HomeAboutContantSeeder::class,
           HomeCardSectionSeeder::class,
           HomeCarouselIntroSeeder::class,
           HomeCarouselSeeder::class,
           HomePromotionSeeder::class,
           HomeSectionSeeder::class,
           HomeServiceSeeder::class,
           HomeTestimonialSeeder::class,
           HomeTitreSpanSeeder::class,
           HomeTitreSeeder::class,
           ServicesTitreSpanSeeder::class,
           ServicesServiceSeeder::class,
           ServicesFeatureImgSeeder::class,
           ServicesFeatureSeeder::class,
           ServicesServicesCardSeeder::class,
           ContactContactUsSeeder::class,
           ContactMainOfficeSeeder::class,
           ContactPlaceholderSeeder::class,
           CategorySeeder::class,
           PostSeeder::class


         ]);
        // \App\Models\User::factory(10)->create();
        

    }
}
