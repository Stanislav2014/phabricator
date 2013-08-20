<?php

final class ReleephBranchTransaction
  extends PhabricatorApplicationTransaction {

  public function getApplicationName() {
    return 'releeph';
  }

  public function getApplicationTransactionType() {
    return ReleephPHIDTypeBranch::TYPECONST;
  }

  public function getApplicationObjectTypeName() {
    return pht('branch');
  }

}

