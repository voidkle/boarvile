import { createRoot } from 'react-dom/client'
import './index.css'

import SiteHeader from './components/SiteHeader.jsx'
import SiteFooter from './components/SiteFooter.jsx'
import ScrollToTopButton from './components/ScrollToTopButton.jsx'

const header = document.getElementById('site-header')
if (header) createRoot(header).render(<SiteHeader />)

const footer = document.getElementById('site-footer')
if (footer) createRoot(footer).render(<SiteFooter />)

const scrollTop = document.getElementById('scroll-to-top')
if (scrollTop) createRoot(scrollTop).render(<ScrollToTopButton />)