## Resume03

Resume03 is a Statamic starter kit. A fully customizable readymade template for a resume website. 

## Introduction 

Presenting your skills and achievement gets simple with Resume03. Resume03 is a Statamic Starterkit, a resume website template that gives you a code-ready solution. Beautifully designed templates enhance your online presence and build trust. Resume03, creating an appealing and professional resume website, becomes effortless.  

## Feature List 

Building a website from scratch for a resume is time-consuming. It takes exceptional experience to make a convincing and SEO-friendly design that makes you stand out.   

Using Resume03, a Statamic Starerkit, you can build a resume website in no time without prior coding knowledge. Just install it and change the settings as you want to show. A ready-made template solution specifically designed to make your CV stand out and convincing. Simply fill up the details you want to share, and Resume03 is ready to launch. 

Resume03 is a Statamic starter kit shows different types of details according to your preference in different blocks: 

- **About me section** - Present yourself in your style with “What I do!” details 

- **Resume details** - Education, experience, working skills and knowledge 

- **Portfolio** - Show your portfolio in the form of videos, web designs, Logos, Graphic designs, Blogs and articles and your client names and details 

- **Your Contact details** - phone number, Location, social media, and E-mail 

##  Features Resume03 Starterkit provides? 

- The ready-made template saves your time, just adds all your resume details 
- Easy customization options 
- User-friendly and convincing interface  
- Easy to edit according to your requirements  
- No coding required anyone can use it 
- Downloadable CV option for the reader  
- 2 Different layouts with Day and night mode  
- Easy contact us Detail form for effortless inquiries  
- Portfolio details with all client details 

## Quick Start

### 1. Create a new site

You can create a new site using the [Statamic CLI Tool](https://github.com/statamic/cli):

```
statamic new your-site acquaint-softtech/resume03
```

Or you can install manually into a fresh [Statamic installation](https://statamic.dev/installation) by running:

```
php please starter-kit:install acquaint-softtech/resume03 --clear-site
```

### 2. Make a new user

The above installers should prompt you to make a user, but you can also run `php please make:user`. You'll want it to be a `super` so you have access to everything.

### 3. Recompile the CSS

The [TailwindCSS](https://tailwindcss.com/) included in this kit is compiled and purged to reduce filesize on any unused classes and selectors. If you want to modify anything, just recompile it.

```
npm i && npm run dev
```

To compile for production again:

```
npm run build
```