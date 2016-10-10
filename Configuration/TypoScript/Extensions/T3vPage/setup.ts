# === T3v Page Configuration ===

plugin {
  tx_t3vpage {
    persistence {
      enableAutomaticCacheClearing = 1

      updateReferenceIndex = 0

      # storagePid = {$plugin.tx_t3vpage.persistence.storagePid}
    }

    view {
      layoutRootPath = {$plugin.tx_t3vpage.view.layoutRootPath}

      templateRootPath = {$plugin.tx_t3vpage.view.templateRootPath}

      partialRootPath = {$plugin.tx_t3vpage.view.partialRootPath}
    }

    settings {
      # ...
    }
  }
}